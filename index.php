<?php

include_once 'Dipendenti.php';
include_once 'Dirigente.php';
include_once 'Operaio.php';

$dirigente = new Dirigente('1A' , 'Mike' , 'Smith' , 3000 , 'HR');
$dirigente2 = new Dirigente('1B' , 'Jon' , 'Doe' , 3000 , 'IT');


echo "<pre>";
var_dump($dirigente);
var_dump($dirigente2);
echo "</pre>";

$operaio = new Operaio('2A' , 'Rick' , 'Simons' , -1, 'Night');
$operaio1 = new Operaio('2B' , 'Rosa' , 'Parks' , 1500 , 'Day');

echo "<pre>";
var_dump($operaio);
var_dump($operaio1);
echo "</pre>";

try{
  $pay_operaio = $operaio->payCacl($operaio->pay);
  echo 'Gross salary'. ' ' . $pay_operaio;
} catch (Exception $e){
  echo 'Exception: ' . $e->getMessage();
}
?>
