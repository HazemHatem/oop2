<?php


class ElectricCar extends Car
{
    public $batterySize;

    public function __construct($make, $model, $year, $batterySize)
    {
        parent::__construct($make, $model, $year);
        $this->batterySize = $batterySize;
    }

    public function charge()
    {
        return "The $this->make $this->model's battery of $this->batterySize kWh is charging.";
    }

    public function drive()
    {
        return "Electric car is driving";
    }
}
