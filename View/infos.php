<?php
require_once('Model/Model.php');
include_once('Model/magasin.php');
include_once('Model/client.php');
?>


<p class="display-6">Prénom : <?php echo $_SESSION['firstname']; ?></p>
<p class="display-6">Nom : <?php echo $_SESSION['lastname']; ?></p>
<?php
foreach ($magasin as $key => $value) { ?>
    <p class="display-6">Magasin : <?php echo $value["district"] . " - "  . $value["address"]; ?></p>
<?php
}
?>
<br>
<h4 class="display-6 text-center my-3 ">Liste des clients : </h4>
<table class="table table-dark table-striped w-75 mx-auto table-bordered">
    <thead>
        <tr>
            <th colspan="1" class="p-3">Prénom</th>
            <th colspan="1" class="p-3">Nom</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($customer as $key => $value) { ?>
            <tr>
                <td class="p-3"><?php echo $value['first_name']; ?></td>
                <td class="p-3"><?php echo $value['last_name']; ?></td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>