<?php

class LivrePresentation{

    public function listLivres()
    {
      echo "\nViewing the list of Books\n";
  
      $livreService = new LivreServices();
      $livres =  $livreService->getListLivres();
  
      if (!empty($livres)) {
        foreach ($livres as $livre) {
          echo "---------------------------------\n";
          echo "ISBN: " .$livre->ISBN . "\n";
          echo "Title:  " .$livre->title . " \n";
        }
      } else {
        echo "No livres available.\n";
      }
      echo "---------------------------------\n\n";
    }
  
    public function ajoutLivre()
    {
      echo "\nAjouter nouveau autheur\n";
      $nom = askQuestion("Enter le ISBN de lecture (or type 'back' to go back): ");
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