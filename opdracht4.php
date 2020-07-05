//opdracht4
 <?php
 //parent class
 abstract class game{
     public $name;
     public function__construct($name){
         $this->name =$name;
     }
     abstract public function games() : string;
 }
 class fps extends game {
	public function games() : string {
		 $this -> name;
    }
    class storyline extends game {
        public function games() : string {
             $this -> name;
        }
 }
$fps = new fps('Overwatch');
echo $fps -> games();
echo "<br>";

$storyline = new storyline('overwatch2');
echo $storyline -> games();
echo "<br>";
 
 ?>