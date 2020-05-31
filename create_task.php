<?php include "components/header.php" ?>
<?php include "function/functions.php" ?>
<?php createTask() ?>
<?php include "components/nav1.php" ?>

<div class="container" style="margin-top:50px;">
<div class="jumbotron" style="padding:20px;background:rgba(255,255,255,0.8);">
  <h2 class="display-5">Post your new task here.</h2>
  </div>
  <div class="jumbotron" style="padding:30px;background:rgba(255,255,255,0.8);">
  <form method="post" action="create_task.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Task Title</label>
      <input type="text" class="form-control" name="title" placeholder="Learn PHP" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Author</label>
      <input type="tect" class="form-control" name="author" placeholder="Surya G" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Task Content</label>
    <textarea type="text" class="form-control" name="content" placeholder="Learn PHP GET and POST Methods"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="image">Add Thumbnail / Image URL</label>
      <input type="text" class="form-control" name="imageurl" placeholder="https://www.google.com/images/brand-logo.png (Optional)">
    </div>
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Post New Task</button>
  <a href="index.php" class="btn btn-primary my-2 my-sm-0" type="submit">Go Back</a>
</form>
</div>
</div>

</body>
</html>

