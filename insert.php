<?php
$hostname = "localhost:3325";
$username = "root";
$password = "";
$dbname = "ajax";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn) {
    $text = $_POST['textData'];
    $username = $_POST['username'];


    $sql = "INSERT INTO `message` (`id`, `username`, `text`) VALUES (NULL, '$username', '$text')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Added";
    } else {
        echo "Not Added";
    }
}