<?php
require_once dirname( __FILE__ ) ."/../Services/bookServices.php";

class Book{
private $id;
private $title;
private $ISBN;

  public function __construct( $title, $ISBN) {
    $this->id = time();
    $this->title = $title;
    $this->ISBN = $ISBN;
    }

    public function getId() {
        return $this->id;}
 
    public function getTitle(){
        return $this->title;}
    public function setTitle($title){
        $this->title = $title;}
    public function getISBN(){
        return $this->ISBN;}
    public function setISBN($ISBN){
        $this->ISBN = $ISBN;}


}







?>