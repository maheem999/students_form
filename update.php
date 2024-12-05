<?php
include 'db.php';

if(ISSET($_GET['id']))
{
    $id = intval($_GET['id']);

    $sql = "SELECT* FROM students WHERE id= $id";

    $result = $connection->query($sql);
    
    $students = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $course=$_POST['course'];

        $sql="UPDATE students SET id='$id', name= '$name', email='$email', phone='$phone', course='$course' WHERE id = $id";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: student_list.php");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Create students Details</title>
 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <h1 class="text-center text-4xl my-5">Update students</h1>

 <form action="update.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
 <input name="id" type="hidden" value="<?= $students['id']; ?>" placeholder="Enter id" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="name" type="text" value="<?= $students['name']; ?>" placeholder="Enter name" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="email" type="email" value="<?= $students['email']; ?>" placeholder="Enter email" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="phone" type="number" value="<?= $students['phone']; ?>" placeholder="Enter phone number" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="course" type="text" value="<?= $students['course']; ?>" placeholder="Enter course" class="w-full border border-blue-500 p-2 rounded-md">
 <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
 </form>
 
</body>
</html>
