<?php

class Catalog {
    private $cars = [];

    public function addCar(Car $car)
    {
        $this->cars[] = $car->getCarCharacteristic();
    }

    /**
     * @return array
     */
    public function getCars(): array
    {
        return $this->cars;
    }
}

class Car
{
    protected $mark;
    protected $year;
    protected $model;
    protected $vinCode;


    public function getCarCharacteristic()
    {
        return "mark: " . $this->mark . "; year: " . $this->year . "; model: " . $this->model . "; vinCode: " . $this->vinCode;
    }

    /**
     * @param mixed $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $vinCode
     */
    public function setVinCode($vinCode)
    {
        $this->vinCode = $vinCode;
    }

}

class PassengerCar extends Car
{
    private $equipment;

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }

    /**
     * @return mixed
     */
    public function getEquipment()
    {
        return $this->equipment;
    }
}

class TruckCar extends Car
{
    private $carrying;

    /**
     * @param mixed $carrying
     */
    public function setCarrying($carrying)
    {
        $this->carrying = $carrying;
    }
}


$car1 = new PassengerCar();
$car1->setEquipment('Full');
$car1->setMark('Volvo');
$car1->setModel('V40');
$car1->setYear('2018');
$car1->setVinCode('VSX-20');

$car2 = new TruckCar();
$car2->setCarrying('1000');
$car2->setMark('Chevrolet');
$car2->setModel('Silverado 4x4');
$car2->setYear('2010');
$car2->setVinCode('ft. SB');

$catalog = new Catalog();
$catalog->addCar($car1);
$catalog->addCar($car2);

var_dump($catalog->getCars());