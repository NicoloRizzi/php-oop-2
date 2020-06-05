<?php
include_once __DIR__ . '/classes/Item.php';
$item = new Item('T-shirt ', 20 , 001, 'Clothing', 10);
echo $item->printItem();
?>