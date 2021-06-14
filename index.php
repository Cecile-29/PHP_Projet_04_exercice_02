<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet04 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet04 Exercice02</h1>
            <h6 class="col-12 text-info text-center">Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez ces langages.</h6>
        </div>
    <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
            // on crée un tableau associatif (clé => valeur) appelé "$languageIT"
               $languageIT = [1 => 'Javascript', 2 => 'Ruby', 3 => 'Boostrap', 4 => 'Python', 5 => 'C++'];
               // pour parcourir ce tableau on utilise la boucle for each
               // on stocke nos valeurs dans une variable $programming
               foreach($languageIT as $programming){
                 ?>
                 <!-- on écho les valeurs du tableau dans un h6 qui est inclus dans notre boucle -->
                 <h6><?= $programming?></h6> 
                <?php
               }
               var_dump($languageIT);
            ?> 
    </div>
</body>
</html>