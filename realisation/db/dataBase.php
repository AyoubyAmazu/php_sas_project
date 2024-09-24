<?php 
class DataBase {

    public $livres=[];
    public $licteurs = [];
    public $autheur = [];

    public function __construct() {
        if($this->getData()){
            $this->books = $this->getData()->books;
         }
}
    private function getData(){
        $dataPath = file_get_contents( dirname(__FILE__)."/db.txt");
        $Data = unserialize($dataPath );
        return  $Data;
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