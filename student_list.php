<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $connection->query($sql);

$students = $result->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        td, th{
            border: 1px solid black;
            padding: 12px ;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl my-5"> Students List</h1>
    <table class="mx-auto border p-5">
        <thead class="py-2 bg-blue-500 text-white font-medium">
            <tr >
                <th >ID</th>
                <th >Name</th>
                <th >Email</th>
                <th >Phone</th>
                <th >Course</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $students): ?>
                <tr>
                    <td><?= $students['id']; ?></td>
                    <td><?= $students['name']; ?></td>
                    <td><?= $students['email']; ?></td>
                    <td><?= $students['phone']; ?></td>
                    <td><?= $students['course']; ?></td>
                    <td>
                        <a href="update.php?id=<?= $students['id']; ?>"><i class="fa-solid fa-pen-to-square border p-1.5 bg-blue-500 rounded-md text-white"></i></a>
                        <a href="delete.php?id=<?= $students['id']; ?>"><i class="fa-solid fa-trash border p-1.5 bg-red-500 rounded-md text-white"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
