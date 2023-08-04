<?php
$conn= mysqli_connect("localhost","root","", "ice-cream-shop");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
     echo "Connected successfully";
}
?>