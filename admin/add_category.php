<?php include 'includes/header.php';?>
<?php
    //Create database object
    $db = new Database();
    if(isset($_POST['submit'])){
        //Assign variables
        $name = mysqli_real_escape_string($db->link,$_POST['name']);

        //Simple validation
        if($name == ' '){
            //Set error
            $error = 'Please fill out all required fields';
        }else{
            $query = "INSERT INTO categories (name)
                            VALUES ('$name')";
            $update_rows = $db->update($query);
        }
    }
?>
<?php
if(isset($_POST['submit'])){
    //Assign variables
    $name = mysqli_real_escape_string($db->link,$_POST['name']);


    //Simple validation
    if($name == ' '){
        //Set error
        $error = 'Please fill out all required fields';
    }else{
        $query = "UPDATE categories 
                        SET
                        name = '$name'
                        WHERE id =".$id;
        $update_rows = $db->update($query);
    }
}
?>
<form role="form" method="post" action="add_category.php">
    <div class="form-group">
        <label >Category Name</label>
        <input type="text"  name ="name" class="form-control"  placeholder="Enter Category">
    </div>

    <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
</form>
<?php include 'includes/footer.php';?>