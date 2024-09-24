<?php
    require_once dirname(__FILE__)."/../DataAccess/bookDAO.php";

class BookServices{

    private $bookDAO;
    public function __construct(){
        $this->bookDAO = new BookDAO();
    }


   

    public function addBook($book){
    
            $this->bookDAO->setBook($book);
  
    
    }

    function getBooks(){
        $list = $this->bookDAO->getBooks();
        return $list;
    }

    


}




?>