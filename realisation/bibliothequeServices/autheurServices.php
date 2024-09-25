<?php
    require_once dirname( __FILE__ ) ."/../bibliothequeDAO/dataManager.php";
    class AutheursServices {


        private $data;

        public function __construct() {
            $this->data = new DataManager();
        }

        public function getListAutheurs() {
            return $this->data->getAutheurs();}

        public function ajouteAutheur( $autheurs ) {
            $this->data->setAutheur( $autheurs );
            $this->data->save();
        }
        public function removeAutheur( $id ) {
           $autheur = $this->getListAutheurs();
            for( $i=0;$i<count($autheur) ; $i++ ) {
                if ( $autheur[$i]->id == $id ) {
                    array_splice( $autheur,$i,1);
                }
            }    
        
        }

    }









?>