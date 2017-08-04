<?php include "includes/header.php";?>
<?php
    $id= $_GET['id'];
    //Create database object
    $db = new Database();

    //create query
    $query = "SELECT * FROM `posts` WHERE id=".$id;

    //run query
    $posts = $db->select($query)->fetch_assoc();

    //create query
    $query = "SELECT * FROM `categories`";

    //run query
    $categories = $db->select($query);
?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $posts['title'];?></h2>
        <p class="blog-post-meta"><?php echo formatDate($posts['date']);?> by <a href="#"><?php echo $posts['author'];?></a></p>
        <?php echo $posts['body'];?>
    </div><!-- /.blog-post -->

<?php include "includes/footer.php";?>
