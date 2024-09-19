<?php
    require_once "data_tier/data_manager.php";

class book{

    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    function addBook($array){
        $list_json = $this->data->getData();
        $list = json_decode($list_json);
        array_push($list,$array);
       $newArray = json_encode($list);
        $this->data->pushData($newArray);
    
    }

    function afficheList(){
        $list = $this->data->getData();
        return json_decode($list);
    }

    


}




?>