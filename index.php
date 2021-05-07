 <?php 

 // Leap Year problem

	$year = 2024;
	if($year % 4 == 0) {
		echo " ".$year." is leap year";
	} else{
		echo " ".$year." is not leap year";

	}
// =========================================


// Digit, Alphabet or spectal character find

$value = "%";
if (ctype_digit($value)) {
	# code...
	echo "".$value." is Digit character";
}
elseif (ctype_alpha($value)) {
	echo "".$value." is Alphabet";
}
elseif (ctype_alnum($value)) {
	# code...
	echo "".$value." is digit and alphabet mixed character";
}
elseif (ctype_punct($value)) {
	# code...
	echo "".$value." is Special character";
}
else{
	echo "".$value." is Mixed character";
}

// ==========================================

// Calculate Gross salary

 $salary = "12000";
 $no1 = $salary+ $salary*0.2+$salary*0.8;
 $no2 = $salary+ $salary*0.25+$salary*0.9;
 $no3 = $salary+ $salary*0.3+$salary*0.95;


 if ($salary <= 10000 && $salary >= 0) {
 	# code...
 	echo " Basic salary is ".$salary." <br>
 	Gross salary is 1 $no1";
 }
 elseif ($salary >= 10001 && $salary <= 20000) {
 	echo " Basic salary is ".$salary." <br>
 	Gross salary is 2 $no2";
 }
 elseif ($salary >= 20001) {
 	echo " Basic salary is ".$salary." <br>
 	Gross salary is 3 $no3";
 }
 else{
 	echo "Your input is not correct";
 }


?>  


