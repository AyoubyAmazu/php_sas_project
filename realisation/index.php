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
        echo "|        Books Management            |\n";
        echo "|------------------------------------|\n";
        echo "|    Please choose an action:        |\n";
        echo "|------------------------------------| \n";
        echo "| [a] - autheurs                     |\n";
        echo "| [l] - livres                       |\n";
        echo "| [exit] - Exit the program          |\n";
        echo "+------------------------------------+\n\n";
    
        $class = askQuestion("Your choice: ");
        switch (strtolower( $class)) {
            case 'a':
                echo "+------------------------------------+\n";
                echo "|        Books Management            |\n";
                echo "|------------------------------------|\n";
                echo "|    Please choose an action:        |\n";
                echo "|------------------------------------| \n";
                echo "| [l] - list d'autheurs              |\n";
                echo "| [a] - ajouter autheur              |\n";
                echo "| [exit] - Exit the program          |\n";
                echo "+------------------------------------+\n\n";
                $autheuraction = askQuestion("Your choice: ");
                switch (strtolower(  $autheuraction)) {
                    case 'l':
                    $autheurPresentation = new AutheurPresentation();
                    $autheurPresentation->viewAutheurs();
                    break;
                    case 'a':    
                        $bookPresentation = new AutheurPresentation();
                        $bookPresentation->ajoutAutheur();
                    break;
                    case 'exit':
                      $exitProgram = true;
                      break;
              
                    default:
                      echo "Invalid choice. Please try again.\n";
                      break;
                }
            case 'l':
                    echo "+------------------------------------+\n";
                    echo "|        Books Management            |\n";
                    echo "|------------------------------------|\n";
                    echo "|    Please choose an action:        |\n";
                    echo "|------------------------------------| \n";
                    echo "| [l] - list des livres              |\n";
                    echo "| [a] - ajouter livre                |\n";
                    echo "| [exit] - Exit the program          |\n";
                    echo "+------------------------------------+\n\n";
                    $livreaction = askQuestion("Your choice: ");
                    switch (strtolower(  $livreaction)) {
                        case 'l':
                        $livrePresentation = new LivrePresentation();
                        $livrePresentation->viewlistLivres();
                        break;
                        case 'a':    
                            $livrePresentation = new LivrePresentation();
                            $livrePresentation->ajoutLivre();
                        break;
                        case 'exit':
                          $exitProgram = true;
                          break;
                  
                        default:
                          echo "Invalid choice. Please try again.\n";
                          break;
                    }    
        
          }
          echo "Exiting the program. Goodbye!\n";
        }
}
    
    library_management();




?>