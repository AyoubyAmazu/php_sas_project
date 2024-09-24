<?php

require_once dirname(__FILE__)."/../Services/bookServices.php";
require_once dirname(__FILE__)."/../Entities/book.php";

class BookPresentation
{
  public function viewBooks()
  {
    echo "\nViewing the list of Books\n";

    $bookService = new BookServices();
    $books = $bookService->getBooks();

    if (!empty($books)) {
      foreach ($books as $bk) {
        echo "---------------------------------\n";
        echo "ISBN: " . $bk->getISBN() . "\n";
        echo "Title: " . $bk->getTitle() . "\n";
      }
    } else {
      echo "No books available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function addBook()
  {
    echo "\nAdding a new Book\n";
    $ISBN = askQuestion("Enter the ISBN of the book (or type 'back' to go back): ");
    if (strtolower($ISBN) === "back") {
      return;
    }

    $title = askQuestion("Enter the title of the book (or type 'back' to go back): ");
    if (strtolower($title) === "back") {
      return;
    }

    $new_book = new Book($ISBN, $title);
    $bookService = new BookServices();
    $bookService->setBook($new_book);
    echo "Book added successfully\n\n";
  }
}


?>