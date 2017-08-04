<?php include 'includes/header.php';?>
<?php
    $id= $_GET['id'];
    //Create database object
    $db = new Database();

    //create query
    $query = "SELECT * FROM `categories` WHERE id=".$id;

    //run query
    $category = $db->select($query)->fetch_assoc();

    //create query
    $query = "SELECT * FROM `categories`";

    //run query
    $categories = $db->select($query);
?>
<?php
if(isset($_POST['delete'])){
    //create query
    $query = "DELETE FROM categories WHERE id=".$id;
    $delete_row = $db->delete($query);

}
?>

    <form role="form" method="post" action="edit_category.php?id=<?php echo $id;?>">
        <div class="form-group">
            <label >Category Name</label>
            <input type="text"  name ="name" class="form-control"  placeholder="Enter Category" value=" <?php echo $category['name']?>">
        </div>

        <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
        <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
    </form>
<?php include 'includes/footer.php';?>