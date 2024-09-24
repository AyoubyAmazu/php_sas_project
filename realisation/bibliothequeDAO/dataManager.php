<?php
    require_once dirname( __FILE__ ) ."/../db/dataBase.php";
    
    class DataManager{
        private $data;
        private $livres;
        private $autheur;
        private $lecteurs;
        private $emprunt; 
        public function __construct(){
            $this->data = new DataBase();
        }


        public function getLivres(){
            return  $this->data->livres;
        }

        public function setLivre($livres){
            $this->data->livres[] = $livres;
        }

        public function getEmprunts(){
            return  $this->data->emprunt;
        }
        public function setEmprunt($emprunt){
            $this->data->emprunt[] = $emprunt;
        }

        public function setLecteur($lecteur){
            $this->data->lecteurs[] = $lecteur;
        }
        public function getLecteurs(){
            return $this->data->lecteurs;
        }
        public function setAutheur($autheur){
            $this->data->autheur[] = $autheur;
        }
        public function getAutheurs(){
           return $this->data->autheur ;
        }
        public function save() {
            $this->data->save();
        }


    }
    

?>