<?php include "connection.php" ?>

<?php 

function createTask(){
    GLOBAL $connection;

    if(isset($_POST['submit'])){
        $title = trim(mysqli_real_escape_string($connection,$_POST['title']));
        $author = trim(mysqli_real_escape_string($connection,$_POST['author']));
        $content = trim(mysqli_real_escape_string($connection,$_POST['content']));
        $imageurl = trim(mysqli_real_escape_string($connection,$_POST['imageurl']));

        $query = "INSERT INTO task(title, author, content, imageurl) ";
        $query .= "VALUES ('$title','$author','$content','$imageurl')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Error '.mysqli_error($connection));
        }else {
            header("Location: index.php");
        }   
    }
}



function editTask(){
    GLOBAL $connection;
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $imageurl = $_POST['imageurl'];
        $id = $_POST['id'];
    
        $query = "UPDATE task set ";
        $query .= "title = '$title', ";
        $query .= "author = '$author', ";
        $query .= "content = '$content', ";
        $query .= "imageurl = '$imageurl' ";
        $query .= "WHERE id = $id";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result){
            die("Failed query ".mysqli_error($connection));
        } else {
            header("Location: index.php");
        }
    
    }
}

?>