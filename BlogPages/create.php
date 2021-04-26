<?php
// connection to the DB
$conn  = mysqli_connect('localhost', 'root', '', 'dynamic-blog');

$title =$_POST["title"];
$author =$_POST["author"];
$date =$_POST["date"];
$description =$_POST["description"];
$query = "INSERT INTO posts (title, author, date, description) VALUES ('$title', '$author', '$date', '$description')";
$query_run= mysqli_query($conn,$query);
header("location:dashboard.php");
?>