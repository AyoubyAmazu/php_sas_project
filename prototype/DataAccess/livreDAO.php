<?php
    require_once dirname(__FILE__).'../../db/DataBase.php';
    class BookDAO{
        private $data;
        public function __construct() {
            $this->data = new DataBase();
        }


        public function getBooks(){
            
            $books =  $this->data->getData();
            return  $books;
        }

        public function addBook($array){
            $this->data->setData($array);
        }

    }




    $AA= NEW BookDAO();
    $bb = $AA->getBooks();
    echo "<pre>";
    print_r($bb["books"]);
    echo '</pre>';




?>