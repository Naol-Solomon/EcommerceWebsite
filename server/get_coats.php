<?php 
    include 'connection.php';

    $stmt=$conn->prepare("SELECT * FROM products WHERE product_category='Coats' LIMIT 4");
    $stmt->execute();

    $row=$stmt->get_result();


?>