<?php


     require_once dirname(__FILE__)."/presentation/autheurPresentation.php";
     require_once dirname(__FILE__)."/presentation/livrePresentation.php";


    function askQuestion($question)
    {
      echo $question;
      return trim(fgets(STDIN));
    }
    
    function library_management()
    {
      echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';
      echo "bienvenu dans bilbliotheque manager program\n\n";
    
      $exitProgram = false;
      while (!$exitProgram) {
        echo "+------------------------------------+\n";
        echo "|       Bibliothèque Management      |\n";
        echo "|------------------------------------|\n";
        echo "|    Please choiser un action:       |\n";
        echo "|------------------------------------| \n";
        echo "| [a] - autheurs                     |\n";
        echo "| [l] - livres                       |\n";
        echo "| [exit] - Exit le program           |\n";
        echo "+------------------------------------+\n\n";
        $class = askQuestion("votre choix: ");



      if (strtolower( $class)=='a') {


          $exitAutheur = false;
          while (!$exitAutheur) {


            echo "+------------------------------------+\n";
            echo "|        autheur Management          |\n";
            echo "|------------------------------------|\n";
            echo "|    Please choose an action:        |\n";
            echo "|------------------------------------| \n";
            echo "| [l] - list d'autheurs              |\n";
            echo "| [a] - ajouter autheur              |\n";
            echo "| [m] - modifier autheur             |\n";
            echo "| [exit] - Exit autheur management   |\n";
            echo "+------------------------------------+\n\n";
            $autheuraction = askQuestion("votre choix: ");


             if (strtolower(  $autheuraction)=='l') {
                   $autheurPresentation = new AutheurPresentation();
                    $autheurPresentation->viewAutheurs();
              } else if( strtolower(  $autheuraction)=='a'){   
                $autheurPresentation = new AutheurPresentation();
                $autheurPresentation->ajoutAutheur();
              }else if(strtolower(  $autheuraction)=='m'){
                $autheurPresentation = new AutheurPresentation();
                $autheurPresentation->modifierAutheur();
              }else if( strtolower( $autheuraction)== 'exit'){
                 $exitAutheur = true;
              }else{echo "Invalid choice. Please try again.\n";}
          }


          echo "Exiting autheur management. Goodbye!\n";

        }else if(strtolower( $class)=='l'){


          $exitLivre = false;
          while (!$exitLivre) {


              echo "+------------------------------------+\n";
              echo "|        livre Management            |\n";
              echo "|------------------------------------|\n";
              echo "|    Please choose an action:        |\n";
              echo "|------------------------------------| \n";
              echo "| [l] - list des livres              |\n";
              echo "| [a] - ajouter livre                |\n";
              echo "| [exit] - Exit livre management     |\n";
              echo "+------------------------------------+\n\n";
              $livreaction = askQuestion("votre choix: ");


              if (strtolower(  $livreaction)=='l') {
                    $livrePresentation = new LivrePresentation();
                    $livrePresentation->viewlistLivres();
              }else if(strtolower(  $livreaction)=='a'){    
                    $livrePresentation = new LivrePresentation();
                    $livrePresentation->ajoutLivre();
              }else if(strtolower(  $livreaction)== 'exit'){
                $exitLivre = true;
              }else{echo "Invalid choix. Please try again.\n";}    
          }


          echo "Exiting livre management. Goodbye!\n";
        }
      }

      
      echo "Exiting the program. Goodbye!\n";
}

    
    library_management();




?>