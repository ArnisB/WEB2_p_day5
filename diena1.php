<?php

// error_reporting(-1);
// ini_set('display_errors','On');

//print(1);
print_r('222 ');
//print("333");
// šis ir mēginājumiem lai izprintētu kļudu 
$myArray3=[
		'vards'=>'janis',
		'uzvards'=>'berzins',
		'telefons'=>'123456',
		'hobiji'=>['sleposana', 'skriesana', 'esana'],
		'epasti' => ['ssss@fff.lv', 'dddd@dddd.lv'],
		'epasti2' => ['ssss2@fff.lv', 'dddd2@dddd.lv'],
		'epasti3' => ['ssss3@fff.lv', 'dddd3@dddd.lv']

	];
	foreach ($myArray3 as $key => $value) {
		if (!is_array($value)) {
			print_r($key . " vertiba ir: " . $value ."; \n");# code...
		}
		else {
			print_r($key .  " vertiba ir: ");
			// print_r($value);
			//echo('te saakas hobiju printesana: ' );
			foreach ($value as $key2 => $value2) {
				print_r($key2 . " vertiba ir: " . $value2 ."; \n");
			}
		}

	}


	$flag = 5;

	if($flag>=5){ 
		echo (' jaaa ');
	}
	elseif ($flag<=4) {
		echo(' jaa2 ');
	}
	else{
		echo (' nooo1 ');
	}

	switch ($flag) {
		case 1:
		echo "1 atrums";
		break;
		case 2:
		echo "2 atrums";
		break;
		case 3:
		echo "3 atrums";
		break;
		case 4:
		echo "4 atrums";
		break;
		default:
		echo " divains atrums  ";
		break;
	}


$foo=1;
echo ($foo);

$bar=',777';
echo ($bar);


?>

