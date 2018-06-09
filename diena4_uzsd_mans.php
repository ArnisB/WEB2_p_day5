<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php

$var='Kukulitis';
function fap($var){
$array = str_split($var);
//echo($array[1]);
//$array[1]=strtoupper($array[1]);
//echo($array[1]);
//echo(sizeof($array));
$a=0;// papildus mainīgais procesa nodrošināšanai !
//$c=sizeof($array);// šo $c var rakstīt f-cijā for sizeof($array) vietā ja iepriekš definē ! 
/**
echo($c.$a);
$i=8;
echo($array[$i]);
$array[$i]=strtoupper($array[$i]);
echo($array[$i]);
$array[$i]=strtolower($array[$i]);
echo($array[$i]);
*/
for($i=0; $i<sizeof($array); $i++){
  if($a<1){
	$array[$i]=strtoupper($array[$i]." ");// ." " var ņemt laukā jo ieraksta array  tukšumu ! 
    echo($array[$i]);// nodrošina $array izdruku 
    $a=$a+1;// papildus mainīgā izmaiņa !
   } 
   else {
	 $array[$i]=strtolower($array[$i]." ");// ." " var ņemt laukā jo ieraksta array  tukšumu ! 
     echo($array[$i]); // nodrošina $array izdruku 
     $a--;// papildus mainīgā izmaiņa !
   }
}
$var2=implode("- ",$array);// "" - ja ir vēlēšanās stringam ielikt kaut ko papildus elementus  piem "- " !
echo($var2);
}

echo($var);
fap($var);


//var_dump( $array );// var_dump -  izdrukā array masīva  info ! 


//$dar=(1=='1')? 1: 2; // alternatīvs if pieraksts

?>



