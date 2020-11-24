<?php

class Car{
	public $mileage;
	public $color;
	public $model;

	public function __construc(){
		$this->mileage = $mileage;
		$this->color = $color;
		$this->model = $model;
	}
	puclic function disp(){
		return "My car is from ".$model.", Color: ".$color.", Mileage: ".$mileage;
	}
}

$marazzo = new Car(12, "Green", "Mahindra");
$santro = new Car(18, "Blue", "Hyundai");
$wagonR = new Car(12, "Red", "Maruthi");

echo $marazzo->disp();
echo $santro->disp();
echo $wagonR->disp();
?>