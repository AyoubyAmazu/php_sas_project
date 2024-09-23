<?php
    require_once dirname(__FILE__)."/../entites/livre.php";
    require_once dirname(__FILE__)."/../services/livreService.php";

    



    //  echo "entre LE TITRE : ";
    //  $nom = trim(fgets(STDIN));
    //  echo "entre LA ISBN : ";
    //  $ISBN = trim(fgets(STDIN));
    $books = new BookServices();
    // $book = $books->getBooks();
    // var_dump($book);
     $book = new Book(2, "ayoub", "ASE345EF");
     $books->addBook($book);
    //  $bookService =

    

     




?>