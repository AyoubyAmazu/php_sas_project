<?php
    require_once dirname(__FILE__)."/../";

     echo "entre LE NOM : ";
     $nom = trim(fgets(STDIN));
     echo "entre LA PLACE : ";
     $place = trim(fgets(STDIN));
     echo "entre LES EXIST (true,false) : ";
     $exist = trim(fgets(STDIN));
    $livre = new book(new dataManager());
     $newLivre =
    [
        "book"=>$nom,
        "place"=>$place,
        "existe"=>$exist
    ];

    $livre->addBook($newLivre);
    $livres = $livre->afficheList();
    var_dump($livres);

     




?>