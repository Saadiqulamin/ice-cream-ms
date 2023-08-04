<?php
include "connection.php";

$stmt = $conn->prepare("SELECT * FROM products LIMIT 4");

if (!$stmt) {
    die("Error in query: " . $conn->error);
}

$stmt->execute();

$featured_products = $stmt->get_result();
?>