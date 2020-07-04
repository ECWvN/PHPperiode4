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
De subclass hond zou een functie kunnen hebben als:

function bark() { return "woof"; } -->

<?php
class Guitar{
    // the properties

    public $name;
    function set_name($name){
        $this->name=$name;
    }

}
$fenderT = new Guitar();
$fenderT->name="Fender Telecaster";





?>