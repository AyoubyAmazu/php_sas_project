<?php

    class DataBase{

        public $books = [];
        public function __construct(){
            if($this->getBooks()){
                $this->books = $this->getBooks()->books;
            }
        }

        private function getBooks(){
            $file =dirname(__FILE__)."/db.txt";
            if(file_exists($file)){
            $dataPath = file_get_contents( $file );
            $Data = unserialize($dataPath );
            return  $Data;
            }
        
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