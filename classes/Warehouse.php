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
}
?>