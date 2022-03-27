<?php
require_once 'class_persegipanjang.php';

$persegipanjang1 = new persegipanjang(20, 14);
$persegipanjang2 = new persegipanjang(16, 8);

echo"<br/>";
echo "<br/>Keliling persegipanjang 1 adalah = ". $persegipanjang1->getkeliling();
echo "<br/>Keliling persegipanjang 2 adalah = ". $persegipanjang2->getkeliling();
echo "<br/>Luas persegipanjang 1 adalah = ". $persegipanjang1->getluas();
echo "<br/>Luas persegipanjang 2 adalah = ". $persegipanjang2->getluas();

?>