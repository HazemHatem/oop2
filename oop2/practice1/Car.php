<?php



class Car
{
    public $wheels = 4;
    public $hood = 1;
    public $engine = 1;
    public $doors = 4;
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function start()
    {
        return "The $this->year $this->make $this->model is starting.";
    }

    public function stop()
    {
        return "The $this->year $this->make $this->model is stopping.";
    }
}
