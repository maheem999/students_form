<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $course=$_POST['course'];

        $sql="INSERT INTO students(id,name,email,phone,course) VALUES('$id', '$name','$email','$phone','$course')";
        
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
 <title>Create New Students</title>
 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <h1 class="text-center text-4xl my-5">Create New Students</h1>

 <form action="student_create.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
 <input name="id" type="number" placeholder="Enter students id" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="name" type="text" placeholder="Enter students name" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="email" type="email" placeholder="Enter students email" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="phone" type="number" placeholder="Enter students phone" class="w-full border border-blue-500 p-2 rounded-md">
 <input name="course" type="text" placeholder="Enter students course" class="w-full border border-blue-500 p-2 rounded-md">
 
 <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
 </form>
 
</body>
</html>
