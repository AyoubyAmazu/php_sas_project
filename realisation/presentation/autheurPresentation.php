<?php

require_once dirname(__FILE__)."/../bibliothequeServices/autheurServices.php";
require_once dirname(__FILE__)."/../entities/autheur.php";

class AutheurPresentation
{
  public function viewAutheurs()
  {
    echo "\nViewing the list of Books\n";

    $autheurService = new AutheursServices();
    $autheurs =  $autheurService->getListAutheurs();

    if (!empty($autheurs)) {
      foreach ($autheurs as $autheur) {
        echo "---------------------------------\n";
        echo "NOM: " . $autheur->nom . "\n";
        echo "email: " .$autheur->email . "\n";
        echo "list des livres: \n";
        foreach( $autheur->livres as $livre){
            echo $livre.",";
        }


      }
    } else {
      echo "No autheurs available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function ajoutAutheur()
  {
    echo "\nAjouter nouveau autheur\n";
    $nom = askQuestion("Enter le nom de l'autheur (or type 'back' to go back): ");
    if (strtolower($nom) === "back") {
      return;
    }

    $email = askQuestion("Enter l'email de l'autheur (or type 'back' to go back): ");
    if (strtolower($email) === "back") {
      return;
    }
    $livres = askQuestion("Enter list de livres siparité avec (,) (or type 'back' to go back): ");
    if (strtolower($livres) === "back") {
      return;
    }else{
        $listLivres = explode(",", $livres);
    }

    $new_book = new Autheur($nom , $email,$listLivres);
    $bookService = new BookServices();
    $bookService->setBook($new_book);
    echo "autheur ajouter avec success \n\n";
  }
}



?>