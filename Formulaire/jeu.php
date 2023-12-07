<?php
    $aDeviner = 125 ;
    require "../header.php";
?>

<?php if($_GET["chiffre"] < $aDeviner):?>
    votre valeur est trop petite
<?php elseif($_GET["chiffre"]> $aDeviner):?> 
    votre valeur est trop grande
<?php else :?>
    Bravo vous avez devinez le bon chiffre : <?= $aDeviner?>
<?php endif?>

<form action="./jeu.php" method="GET" style="margin:10px; padding: 5px ;">
    <input type="number" name="chiffre" placeholder="entrer un nombre" value="<?= htmlentities($_GET["chiffre"])?>">
    <button type="submit" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer;">Envoyer</button>
</form>

<?php
    require "../footer.php";
?>
