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

    //constructor
    public function __construct($_ward, $_lane, $_number,$_description, $_price, $_cod_item, $_category, $_quantity) {
        parent::__construt($_ward,$_lane,$_number);
        $this->description = $_description;
        $this->price = $_price;
        $this->cod_item = $_cod_item;
        $this->category = $_category;
        $this->quantity = $_quantity;
    }
}
$item1 = new Item('Abbigliamento','A','1','t-SHIRT',20,'A001','Maglietta',100);
var_dump($item1);
?>