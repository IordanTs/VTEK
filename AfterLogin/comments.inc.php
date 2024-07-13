<?php
$conn = mysqli_connect('localhost', 'root', '', 'commentssection');
if (!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

function getComments($conn) {
    $sqlCode = "SELECT * FROM comments";
    $result = $conn -> query($sqlCode);
    while($row = $result -> fetch_assoc()) {
        echo "<div class='add-coment'>";
        echo "<i class='fa-solid fa-comment-dots comment-icon'></i>";
        echo $row['username']."<br>";
        echo $row['date']."<br>";
        echo $row['comment']."<br><br>";
        echo "</div>";
    }
}
?>