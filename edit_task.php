
<?php include "components/header.php" ?>
<?php include "function/functions.php" ?>
<?php include "function/connection.php" ?>
<?php 
  if(isset($_GET['edit'])){ 
    $id = $_GET['edit'];
    $query = "SELECT * from task WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<? include "components/nav1.php" ?>
<div class="container" style="margin-top:50px;">
<div class="jumbotron" style="padding:20px;background:rgba(255,255,255,0.8);">
  <h2 class="display-5">Edit your task.</h2>
  </div>
  <div class="jumbotron" style="padding:30px;background:rgba(255,255,255,0.8);">
  <form method="post" action="edit_task.php">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Task Title</label>
      <input type="text" class="form-control" name="title" placeholder="Learn PHP" value="<?php echo $row['title'] ?>"/>
    </div>
    <div class="form-group col-md-6">
      <label for="author">Author</label>
      <input type="text" class="form-control" name="author" placeholder="Surya G" value="<?php echo $row['author'] ?>"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Task Content</label>
    <textarea type="text" class="form-control" name="content" placeholder="Learn PHP GET and POST Methods"><?php echo $row['content'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="image">Add Thumbnail/Image</label>
    <input type="text" class="form-control" name="imageurl" placeholder="Surya G" value="<?php echo $row['imageurl'] ?>"/>
    
 </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="index.php" class="btn btn-primary my-2 my-sm-0" type="submit">Go Back</a>
</form>
<?php editTask() ?>
</div>
</div>
</body>
</html>


