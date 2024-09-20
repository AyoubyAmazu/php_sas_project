<?php
    
    class LivreDAO{
        private $data;


        function getBooks(){
            $this->data =file_get_contents( dirname(__FILE__)."/../db/json_db.json");
            return  $this->data;
        }

        function addBook($array){
            $file = fopen( dirname(__FILE__)."/../db/json_db.json","w");
            fwrite($file,$array);
            fclose($file);
        }

    }







?>