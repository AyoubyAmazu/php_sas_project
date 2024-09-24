<?php
require_once dirname(__FILE__) ."/../DataAccess/bookDAO.PHP";

class BookServices{
        private $db;
        public function __construct(){
            $this->db = new BookDAO();
        }

    public function getBooks(){
        return $this->db->getBooks();
    }
    public function setBook($book){
        $this->db->addBook($book);
    }

}







?>