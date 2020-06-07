<?php
/**
 * CLASS CATEGORY
 */
class Warehouse {
    //Properties
    public $ward;
    public $lane;
    public $number;

    //Construct
    public function __construt($_ward, $_lane, $_number)
    {
        $this->ward = $_ward;
        $this->lane = $_lane;
        $this->number = $_number;
    }

    public function showWarehouse () {
        echo "<h1> Ward: $this->ward </h1>";
        echo "<h2> Lane: $this->lane</h2>";
        echo "<h3> Number: $this->number</h3>";
    }
}
$warehouse1 = new Warehouse ('ABBIGLIAMENTO', '1' ,'1A');
$warehouse2 = new Warehouse ('ATTREZZATURA', '2','2B');
?>