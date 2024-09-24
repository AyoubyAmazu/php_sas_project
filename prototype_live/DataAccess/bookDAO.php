<?php
    require_once dirname(__FILE__).'/../DataBase/DataBase.php';
class BookDAO{

    private $data;
    public function __construct() {
        $this->data = new DataBase();
    }

    public function getBooks(){
        return $this->data->books;
    }

    public function addBook( $book){
        array_push($this->data->books,$book);
        $this->data->saveData();
    }


}


?>