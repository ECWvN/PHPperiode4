<!-- opdracht2
OPDRACHT
Schrijf zelf een class voor een zelfbedacht object

VOORBEELD: voor het object  Person zou je hetvolgende kunnnen bedenken:

class: Person
properties: voornaam, tussenvoegsel, achternaam en leeftijd

Bedenk daar een aantal methods bij.
Voorbeeld van methods voor Person:
 

getFullname()
setFullname()

setAge()
getAge()

 

Lever je class in via een github of gitlab - repository

######## extra uitdaging:

probeer of je een superclass met subclasses kunt maken van je objecten, bijvoorbeeld
superclass is 'huisdier', met algemene kenmerken, zoals aantal poten,
subclasses zijn bijvoorbeeld  'hond' of 'vis', met hun eigen kenmerken.
De sub<?php
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


