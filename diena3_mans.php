<?php

error_reporting(-1);
ini_set('display_errors', 'On');
/**
echo("1.variants(manejais): - ");
$i=1;
while($i<10){
 echo(' '.$i);
  $i+=2;
}
$i=10;
while($i<20){
	echo(' '.$i);
  $i+=2;
}

echo("  ----2.variants: - ");
$i=0;
while($i<10){
	if($i%2==1){
	echo(' '.$i);	
	}
  $i++;
}

while($i<20){
		if($i%2==0){
	echo(' '.$i);	
	}
  $i++;
}
echo("  ----3.variants: - ");
for($i=1;$i<10;$i+=2){
	echo(' '.$i);	
	}
for($i=10;$i<20;$i+=2){
	echo(' '.$i);	
	}

echo("  ----4.variants: - ");
$i=1;
while($i<20){
	if($i<10){
	echo(' '.$i);	
	}
	else{
		echo(' '.($i-1));
	}
  $i+=2;
}
echo("  ----5.variants: - ");
for($i=1;$i<20;$i+=2){
	if($i<10){
	echo(' '.$i);	
	}
	else{
		echo(' '.($i-1));
	}
}
echo("  ----6.variants: - ");
for($i=1;$i<=9;$i++){
	if($i<5){
	echo(' '.($i*2-1));	
	}	
	else{
		echo(' '.($i*2));
	}
}

echo("  ----7.variants: - ");
for($i=9;$i>=0;$i--){
	if($i<5){
	echo(' '.($i*2+1));	
	}	
	else{
		echo(' '.($i*2));
	}
}

echo("  ----8.variants: - ");
$i=10;
while($i>0){
	echo($i. " ");
	$i--;
}

*/

function manaFunkcija(){
	echo("Done");
}

function manaFunkcijaArParametru($var){
	echo($var . " ");
}

function manaFunkcijaArNeobligatuParametru($var='zivis'){
	echo($var . " ");
}

function multipleParameters($a=12, $b='d', $c='999', $d='finito'){
	echo($a.$b.$c.$d);
}

function kaapinataat($base, $pow=2){
	$result=$base^$pow;
	echo($result);
	return $result;
}

function kaapinataat2($base, $pow1 = 2){
	$result1=1;
	for($i=1;$i>abs($pow1);$i++){
		//abs - atgriež absolūtu skaitli !!!!! Iebūvēta funkcija 
		$result1*=$base;
	}
	if($pow1<0){
		$result1=1/$result1;
	}
	$result1=round($result1,2);
	return$result1;
}

echo("  ----8.variants: - ");
$i=10;
while($i>0){
	echo($i. " ");
	$i--;
	manaFunkcija();
	manaFunkcijaArParametru($i);
	manaFunkcijaArNeobligatuParametru($i);
	kaapinataat($i);
	$j=kaapinataat2($i);
	echo(' kapinaat2 '.$j);
}

//echo($var);
/**
unset($i);
echo(' '.$i);
*/
manaFunkcija();
manaFunkcijaArNeobligatuParametru();
$super="cool";
manaFunkcijaArNeobligatuParametru($super);

echo("  -----------multiple function ------------ ");


multipleParameters(1,2,3,4);
echo(" ---------- ");
multipleParameters(2);
echo(" --------- ");
multipleParameters(1,4);
echo(" --xxxxx-------------- ");

kaapinataat(9);
echo(" --xxxxx-------------- ");
kaapinataat(9,4);

echo(" --round------------- ");
$a=2.567;
echo(round($a,2));
echo("  floor fun no $a ir:    ".floor($a));
echo(" --check var -------------- ");
//$var=3;
function check($var){
	if($var>2){
		return true;
	}
	return false;
}
echo((int) check($a));

if(check($a)){
	echo(" jess ");
}

echo(check($a)+check($a));

echo(" --check a daudzī-------------- ");
$a=['a1'=>0, 'a2'=>1];
echo(" " . $a['a3']);// nevar izdarīt jo nav definēts !!!

if(isset($a['a3'])){
echo($a['a3']);
}
else{
	$portion=(int) $a['a2']-(int) $a['a1'];
	echo("resultins ir :" . ($a['a2']+$portion));
}

echo(" --salatiii  -------------- ");

$salad= 'aboli bumbieri arbuzs banani tomati';
$array1= explode(" ", $salad);
var_dump($array1);
$salad2=implode(", ", $array1);
var_dump($salad2);

$string='Ilva';
$splitstring=str_split($string);
$splitstring= implode("-", $splitstring);
$splitstring= strtolower($splitstring);
var_dump($splitstring);
?>