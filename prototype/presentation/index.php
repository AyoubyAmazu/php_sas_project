<?php
    require_once dirname(__FILE__)."../entites/livre.php";

    $book = new Book();

     echo "entre LE TITRE : ";
     $nom = trim(fgets(STDIN));
     echo "entre LA ISBN : ";
     $place = trim(fgets(STDIN));
    

    $livre->addBook($newLivre);
    $livres = $livre->afficheList();
    var_dump($livres);

     




?>