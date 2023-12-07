<?php
require "../header.php";
// checkbox
   $parfums =[
    'Fraise'  =>4,
    'Chocolat'=>5,
    'Vanille' =>3
   ];
// Radio

   $cornet =[
    'Pot'  =>3,
    'Cornet'=>5,
   ];
// checkbox
   $supplement =[
    'pepite de chocolat'  =>1,
    'chantilly'=>0.5,

   ];
?>
<?php 

    function  generateCheckedAttribute($arrayProduct , $element) {

        if(isset($arrayProduct) && in_array($element,$array)) {
            echo 'checked' ;
        }
    }

    function calculPrixTotal($arrayProduct ,$buttonEnvoyer){
        
        // recupere les valeurs du tableau  
        $arrayProduct =$arrayProduct;
        // recupere le nom du button envoyer 
        $envoyer    =$buttonEnvoyer;
        $conteur = 0;
    
        if(isset($envoyer)){
                echo "<h3> Voici les Parfum choisis <h3>";
                foreach ($arrayProduct as $key) {
                    $conteur +=intval($key);
                }
                echo "<h4>Le Prix TOTAL : $conteur cfa</h4>";
        }
      }

?>
<form action="./calculePrix.php" method="POST" style="font-family: Arial, sans-serif; margin: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
    <div class="form-group" style="margin-bottom: 15px;">

        <?php foreach ($parfums as $parfum => $prix) :?>
            <input type="checkbox" name="t_parfum[]" value="<?= $prix?>"/> 
            <label for="<?=$parfum?>"><?= $parfum ?> - <?= $prix ?> $</label><br/> 
        <?php endforeach?>
    </div>

    <button type="submit" value="Envoyer" name="envoyer" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer;">Envoyer</button>
</form>

<h2>$_POST</h2>
<pre><?php calculPrixTotal($_POST['t_parfum'] ,$_POST['envoyer'])?></pre>

<?php
    require "../footer.php";
?>