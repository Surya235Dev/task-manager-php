<?php include "components/header.php" ?>
<?php include "function/connection.php" ?>
<nav class="navbar navbar-light bg-light justify-content-between"  style="margin-bottom:30px;">
  <a class="navbar-brand">Task Organiser v1.0 - Surya </a>
  <a href="create_task.php" class="btn btn-outline-success my-2 my-sm-0 " type="submit">Add New Task</a>
</nav>
<div class="container">

<?php
$query = "SELECT * from task";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_array($result)) {
?>
<div class="card bg-light mb-4" >
  <div class="card-header" style="font-size:20px;"> <?php
    echo $row['title'];
?>
                   <div style="float:right">
                    <a href="edit_task.php?edit=<?php echo $row['id'] ?>" class="btn btn-success text-white"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="delete_task.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger text-white"><i class="fa fa-trash"></i> Delete</a>
                    </div>
  </div>
  
  <div class="card-body">
  <div style="float:right">
    <img src="<?php echo $row['imageurl']?>" alt="" height="100px" width="150px;">
  </div>
    <h5 class="card-title"><?php
    echo $row['content'];
?></h5>
    <p class="card-text"><?php
    echo $row['author'];
?> - Posted On : <?php
$timestamp = strtotime($row['time']);
$date = date('d-m-Y', $timestamp);
echo $date;
?></p>
  </div>
</div>

<?php
}
?>

</div>

</body>
</html>