<?php



class BabyCar extends Product
{
    private $age;
    private $weight;
    private $materials = array();

    public function __construct($name, $price, $description, $age, $weight)
    {
        parent::__construct($name, $price, $description);
        $this->age = $age;
        $this->weight = $weight;
    }

    public function AddMaterials($materials)
    {
        $this->materials[] = $materials;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
