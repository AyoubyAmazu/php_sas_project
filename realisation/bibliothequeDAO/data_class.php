<?php
    
    class dataManager{
        private $data;


        function getData(){
            $this->data =file_get_contents(dirname(__FILE__)."/../db/json_db.json");
            return  $this->data;
        }

        function pushData($array){
            $file = fopen(dirname(__FILE__)."/../db/json_db.json","w");
            fwrite($file,$array);
            fclose($file);
        }

    }
    

?>