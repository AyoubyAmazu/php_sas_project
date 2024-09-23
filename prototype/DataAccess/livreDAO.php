<?php
    require_once dirname(__FILE__).'../../db/DataBase.php';
    class BookDAO{
        private $data;
        public function __construct() {
            $this->data = new DataBase();
        }


        public function getBooks(){
            
            return $this->data->getBooks();
        }

        public function addBook($book){
            $this->data->setBook($book);
            $this->data->save();
        //    $allData = $this->data->getData();
        //    array_push($allData["books"], $array);
        //     $this->data->setData($allData);
        }

    }


?>