<?php


$arquivo=new SplFileObject('TXTCSV.txt');


while(!$arquivo->eof()){
$linha=$arquivo->fgetcsv(',');
echo $linha[0];

}
$date=new DateTime();

$date->setTimestamp($arquivo->getCTime());
 echo $date->format('d/m/y');