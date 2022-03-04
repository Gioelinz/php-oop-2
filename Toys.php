
<?php
require_once __DIR__ . '/Product.php';
class Toys extends Product
{
    public $type_of_animal;

    public function __construct($id, $name, $price, $type_of_animal)
    {
        parent::__construct($id, $name, $price);

        $this->type_of_animal = $type_of_animal;
    }
}
