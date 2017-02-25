<?php


class Person {

	public static $array = array ();
	// 	public static $counter;
	public $name;
	public $alter;
	// 	public $adresse;
	// 	public $ort;
	 
    //Konstruktor der Klasse Person
	public function __construct($name, $alter) {
		$this->name = $name;
		$this->alter = $alter;
		//	 $this -> adresse = $adresse;
		//	 
	}
    
	public function __destruct() {
	}
    
    //gibt die Person zurück
	public function getPersons() {

	}
	
	//gibt die Adresse zurück
	public function getAdress($name) {
		$this->name = $name;

	}
	
   //entweder Rückgabe oder in der Funktion mit echo
	public static function createPersonArray() {
		echo '<ul>';
		echo '<li>'.count(self :: $array).'</li>';
		echo '</ul>';
		return count(self::$array);

	}
	//statische Person wird erzeugt
	public static function createPerson($name, $alter) {
		
		for ($index = 0, $max_count = 5; $index < $max_count; $index++) {
			$person = new Person($name, $alter);
			self :: $array[] = $person;
		}
	}
}

//abgeleitete Klasse Mitarbeiter
class Mitarbeiter extends Person {

	static function createPerson($name, $alter) {

	}
}

session_start();
echo $_SESSION['counter']++;
Person :: createPerson("Hans", 34);
echo '<h2>' . Person :: createPersonArray() . '</h2>';
echo '<h2>' . count(Person :: $array) . '</h2>';

//$counter = 0;
//$counter++;
//Person::$counter++;
//echo '<h2>'.$counter.'</h2>';
//echo '<h2>'.Person::$counter.'</h2>';
$person2 = new Person("Hans Wurst", 50);
$person2->name = "Matthias Veenhuis";
echo '<h1>' . $person2->name . '</h1>';
?>
