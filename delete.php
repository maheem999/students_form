<?php
include 'db.php';

if(ISSET($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id=$id";

    if($connection->query($sql)==TRUE)
        {
            header("Location: student_list.php");
        }
}
?>
