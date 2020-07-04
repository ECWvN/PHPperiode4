//opdracht 3


<?php
//src/opdracht3.php
/**
 * a class 
 */
class Guitar {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_wood() {
    return $this->color;
  }
  function get_age() {
    return $this->color;
  }

}

$fenderT = new Guitar("fender telecaster","red","maple","1978");
echo $fenderT->get_name();
echo "<br>";
echo $fenderT->get_color();
echo "<br>";
echo $fenderT->get_wood();
echo "<br>";
echo $fenderT->get_age();
?>