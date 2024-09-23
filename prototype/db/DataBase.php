<?php 
class DataBase {

    public $books=[];
    public function __construct() {
        if($this->getData()){
            $this->books = $this->getData()["books"];
         }
}
    private function getData(){
        $dataPath = file_get_contents( dirname(__FILE__)."/json_db.json");
        $Data = json_decode($dataPath ,true);
        return  $Data;
    }
    
    private function setData(){
        $jsonData = json_encode($this, JSON_PRETTY_PRINT);
        file_put_contents(dirname(__FILE__)."/json_db.json", $jsonData);
        
    }
    public function getBooks(){
        return $this->books;
    }
    public function setbook(array $Data){
      array_push($this->books,$Data)  ;
    }
    public function save(){
        $this->setData();
    }
    
}    



?>