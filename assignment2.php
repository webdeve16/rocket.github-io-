<?php

$bread= (int)readline('Enter no of available breads: ');
$vada= (int)readline('Enter no of available vada:');
$samosa= (int)readline('Enter no of available samosa:');
$vadapavPrice= (int)readline('Enter price of vadapav:');
$samosapavPrice= (int)readline('Enter price of samosapav:');

if($samosa<=$bread/2)
{
  $result1=3*15;
}
$bread=$bread-($samosa*2);
if($vada<=$bread/2)
{
  $result2=2*10;
}
$profit=$result1 + $result2;
echo $profit;
?>

