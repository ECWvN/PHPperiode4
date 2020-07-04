//opdracht4
 <?php
 //parent class
 abstract class game{
     public $name;
     public function__construct($name){
         $this->name =$name;
     }
     abstract public function intro() : string;
 }
 
 
 ?>