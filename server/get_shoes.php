<?php

    include ('connection.php');

    $stmt = $conn->prepare("SELECT * FROM products where product_category='Shoes' LIMIT 4");
    $stmt->execute();

    $shoes = $stmt->get_result(); // returns array


?>