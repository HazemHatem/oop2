<?php


class Product
{

    private $name;
    private $price;
    private $description;
    public $image;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function uploadimage($image)
    {
        $this->image = $image;
    }

    public function clacprice()
    {
        return $this->price;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getdescription()
    {
        return $this->description;
    }
}
