<?php
require("Model.php");

$sqlQuery = 'SELECT * FROM address ad 
inner join store st on st.address_id = ad.address_id
inner join staff sta on sta.store_id = st.store_id WHERE staff_id = :usr_id';
$magasinStatement = $db->prepare($sqlQuery);
$magasinStatement->execute(["usr_id" => $_SESSION['id']]);
$magasin = $magasinStatement->fetchAll();
