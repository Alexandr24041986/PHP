<?php 
class House {
	private $entrance;
	private $floors;
	private $flats;
	private $address;
	private $card_human = [];

    function __construct($address,$entrance,$floors,$flats) 
    {
		$this->address = $address;
		$this->entrance = $entrance;
		$this->floors = $floors;
		$this->flats = $flats;
	}

    public function showFlats() 

    {
		echo "Количество квартир: " . $flats;
    }
    

    public function showAddress()

    {
		echo "Адрес: " . $address;
    }
    

    public function addHuman(Human $human) 

    {
		if($this->flats > count($this->$card_human)) {
			$this->$card_human[] = $human;
		} else {
			echo "В доме по адресу: " . $address . " нет свободных квартир";
		}
	}


}

class Human {
	public $name;
	public $howfloor;
		
	function __construct($name, $howfloor) {
		$this->name = $name;
		$this->howfloor = $howfloor;
	}
}

$human = [
	new Human(" Alex ", 1),
	new Human(" Barabara ", 2),
	new Human(" Cecil ", 3),
	new Human(" Dima ", 4),
	
];

 ?>