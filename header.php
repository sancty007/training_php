<?php
            function nav_item(string $lien,string $titre) :string {

               $class ="nav-item";

               if ($_SERVER["SCRIPT_NAME"]===$lien){
                $class .=" active";
               }
                $html ='
                <li class="'. $class .'">
                    <a class="nav-link" aria-current="page" href="'. $lien .' " >' .$titre.'</a>
                </li>"';

                return $html;
                /*
                 <li class="nav-item">
                            <a class="nav-link <?php if ($_SERVER["SCRIPT_NAME"]==="/training_php/contact.php") : ?>active<?php endif;?>" aria-current="page" href="contact.php">contact</a>
                        </li>
                */
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        <?php print_r($title);?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Vos icônes -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    <style>
        body {
            padding-top: 4.5rem; /* Utilisation de rem pour une hauteur de la barre de navigation Bootstrap */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Project name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <u class="navbar-nav">
                        <?php echo nav_item("Exemple.php","Exemple") ?>   
                        <?php echo nav_item("contact.php","contact")?>  
                    </ul>
                </div>
            </div>
        </nav>
       


    <!-- Votre contenu va ici -->

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-iS02HyiBBCnvh6zKTPsZZK6z0lM8A0t9CSzNvsySR/gGyJ8B04Ez7D0IreX+EUWJ" crossorigin="anonymous"></script>


        
