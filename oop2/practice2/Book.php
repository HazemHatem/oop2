<?php


class Book extends Product
{
    private $publishers = array();
    private $writer;
    private $color;
    private $supplier;
    public function __construct($name, $price, $description, $writer, $color, $supplier)
    {
        parent::__construct($name, $price, $description);
        $this->writer = $writer;
        $this->color = $color;
        $this->supplier = $supplier;
    }

    public function AddPublishers($publishers)
    {
        $this->publishers[] = $publishers;
    }

    public function choosePublisher()
    {
        return $this->publishers[array_rand($this->publishers)];
    }

    public function getwriter()
    {
        return $this->writer;
    }

    public function getcolor()
    {
        return $this->color;
    }

    public function getsupplier()
    {
        return $this->supplier;
    }
}
