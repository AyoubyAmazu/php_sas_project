<?php

    class DataBase{

        public $books = [];
        public function __construct(){
            if($this->getBooks()){
                $this->books = $this->getBooks()->books;
            }
        }

        private function getBooks(){
        $fileContent = file_get_contents(dirname(__FILE__)."/db.txt");
        $data = unserialize($fileContent);
        return $data;
        
        }

        private function setBook(){
            $file = dirname(__FILE__)."/db.txt";
            $data = serialize($this);
            file_put_contents($file, $data);
    
        }

        public function saveData(){
            $this->setBook();
        }





    }


    $aa = new DataBase();
    $bb = $aa->books;
    var_dump( $bb );






?>