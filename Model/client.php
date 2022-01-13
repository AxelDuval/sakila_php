<?php
require("Model.php");


$sqlQuery = "SELECT * FROM customer WHERE store_id = :usr_id ORDER BY last_name ASC"; 
$clientStatement = $db->prepare($sqlQuery);
$clientStatement->execute(["usr_id" => $_SESSION['id']]);
$customer = $clientStatement->fetchAll();
