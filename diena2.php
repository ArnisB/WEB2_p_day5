<?php

error_reporting(-1);
ini_set('display_errors', 'On');
/**
$koki = ['abele','bumbiere','ozols'];
$majas = ['3'=>'kalnini', '6'=>'berziņi'];


$kokuskaits = count($koki);// pievienots jauns 
*/
/** // sākas piezīmes
//echo("mums ir : " . count($koki) . "koki"."\n");
//echo("Pēdējā elementa  numurs:  " . (int) (count($koki)-1)." ");
//echo($koki[count($koki)-1]);
*/ // beidzas piezīmes 
/**
echo("mums ir : " . $kokuskaits . "koki"."\n");
echo("Pēdējā elementa  numurs:  " . (int) ($kokuskaits--)." ");
echo($koki[$kokuskaits--]);
echo($kokuskaits++);
echo($kokuskaits);

$kokuskaits-=2;
echo(' koku skaits ir - 2: '. $kokuskaits);
$kokuskaits+=3;
echo(' koku skaits ir + 3: '. $kokuskaits);

//unset($1); -  šādi atbrīvo mainīgo 
*/

$i = 0;
while($i<=10){
	echo($i);
	$i++;
}

echo (" lalalala ");

$i=0;
do{
	echo ($i);
	$i++;
} while($i<=10);

echo (" lalalala2222 ");

for($i=10; $i<20; $i+=2){  // Solis +2
	echo($i);
}

echo (" lalalala55555555");
$kocini = array(4,5,6,7);
foreach ($kocini as $key => $value) {
	echo("key".$key."& value". $value."; ");
}

echo (" lalalala5B5B5B5B5B5B");

$kocini2 = array(4,5,6,7, array(8.1,8.2,8.3,8.4));// vēl viens array pieraksts 
foreach ($kocini2 as  $value) {
	if(is_array($value)){
		foreach ($value as $subvalue) {
			echo("& subvalue: ". $subvalue. "; ");
		}
	}
	else{

	echo("& value". $value."; ");
}

}

echo ("--------------------------");
for($i=0;  $i<count($kocini2); $i++ ){
	if(!is_array($kocini2[$i]))
	echo($kocini2[$i]);
}

echo ("while ciklins ___________");
$i=0;
while($i<count($kocini2)){
  if(!is_array($kocini2[$i])){
	echo($kocini2[$i]);
	}
  $i++;
}
?>