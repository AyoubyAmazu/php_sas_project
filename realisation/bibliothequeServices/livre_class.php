<?php
    require_once (dirname(__FILE__) ."/../data_manager/data_class.php");
    class livre extends dataManager  {

       public function addLivre($array){
           $table = $this->getData() ;

        }
    }



    $aa = new dataManager();
    $array =$aa->getData() ;
    
    var_dump( $array[]);




?>