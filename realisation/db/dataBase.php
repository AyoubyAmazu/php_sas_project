<?php 
class DataBase {

    public $livres=[];
    public $autheur = [];
    
    public $lecteurs = [];

    public $emprunt = [];

    public function __construct() {
        if($this->getData()){
            $this->livres = $this->getData()->livres;
            $this->autheur = $this->getData()->autheur;
            $this->lecteurs = $this->getData()->lecteurs;
            $this->emprunt = $this->getData()->emprunt;
         }
}
    private function getData(){
        $file =dirname(__FILE__)."/db.txt";
        if(file_exists($file)){
        $dataPath = file_get_contents( $file );
        $Data = unserialize($dataPath );
        return  $Data;
        }
    }
    
    private function setData(){
        $jsonData = serialize($this);
        file_put_contents(dirname(__FILE__)."/db.txt", $jsonData);
        
    }
   
    public function save(){
        $this->setData();
    }
    
}    



?>