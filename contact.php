<?php 
    $title ="La page de contact";
    require "header.php";?>
    <div class="container">
        <h1>Nous contacter</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ut, iure sint, quae cumque molestiae nobis error porro sequi quibusdam odit quod ex adipisci illo consectetur alias pariatur est voluptates.</p>
    </div>
    <?php
        $montableau =["youtub","skype","email","faceBook"];

        foreach ($montableau as $value) :
    ?>
       <div class="container">
            <ul>
                <li>
                    <?php echo "$value" ;?>
                </li>
            </ul>
       </div>
    <?php endforeach;?>

<?php require "footer.php"; ?>