<?php
class Animal {
    public $nom;
    public $age;

    public function manger() {
        echo "Je mange.";
    }
}

class Chat extends Animal {
    public function miauler() {
        echo "Miaou !";
    }
    public function manger(){
        echo "function change";
    }
    
}


$chat = new chat();

$chat->manger();


?>