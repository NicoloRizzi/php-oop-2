<?php
/**
 * CLASS ARTICOLO
 */
class Item {
    //Properties
    public $description;
    public $price;
    public $cod_item;

    //Constructor
    public function __construct($_description, $_price, $_cod_item)
    {
        $this->description = $_description;
        $this->price = $_price;
        $this->cod_item = $_cod_item;
    }

    //Methods
    public function printItem() {
        return $this->description . ' ' . $this->cod_item;
    }
}
?>