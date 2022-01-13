<?php 
require_once('templates/header.php');
require_once('templates/nav.php');
require_once('Model/Model.php');
?>

<container class="m-3">
<?php 
require("Model/login.php"); 
?>
</container>

<?php if (isset($_SESSION['LOGGED_USER'])) : ?>
    <?php include_once('View/infos.php'); ?>
<?php endif; ?>

<?php
require_once('templates/footer.php');