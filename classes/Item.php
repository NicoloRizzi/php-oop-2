<?php
include_once __DIR__ . '/Warehouse.php';
/**
 * CLASS ARTICOLO
 */
class Item extends Warehouse {
    //Properties
    public $description;
    public $price;
    public $cod_item;
    public $category;
    public $quantity;


    //Constructor
    public function __construct($_description, $_price, $_cod_item,$_category, $_quantity)
    {
        $this->description = $_description;
        $this->price = $_price;
        $this->cod_item = $_cod_item;
        $this->category = $_category;
        $this->quantity = $_quantity;
    }

    //Methods
    public function printItem() {
        return $this->description . ' ' . $this->cod_item;
    }
}
?>