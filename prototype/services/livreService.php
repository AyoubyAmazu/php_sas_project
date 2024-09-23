<?php
    require_once dirname(__FILE__)."/../DataAccess/livreDAO.php";

class BookServices{

    private $data;

   

    function addBook($book){
    
        
        //     $list_json = $this->data->getData();
    //     $list = json_decode($list_json);
    //     array_push($list,$array);
    //    $newArray = json_encode($list);
    //     $this->data->pushData($newArray);
    
    }

    function getBooks(){
        $list = $this->data->getData();
        return json_decode($list);
    }

    


}




?>