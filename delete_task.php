<?php include "function/connection.php" ?>
<?php 
    $id = $_GET['delete'];

    echo $id;

    $sql = "DELETE FROM task where id = $id ";

    $result = mysqli_query($connection, $sql);

    if(!$result){
        die("Failed ".mysqli_error());
    }

    header("Location: index.php");
    die;

?>