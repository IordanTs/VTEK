<?php
require 'comments.inc.php';
if(isset($_POST['commentSubmit']))
{
    $username = $_POST['username'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];
    $sqlCode = "INSERT INTO comments (username, date, comment) VALUES ('$username', '$date', '$comment')";
    $conn -> query($sqlCode);
    header('location:play-video-page.php');
;}
?>