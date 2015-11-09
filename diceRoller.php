<?php

$numDice;
$numSides;
$results = array();

echo "Dice Roller \n";
echo "Input the number of dice and the number of sides on the dice. \n";


function userInput(){
	echo "Input {number of dice}d{number of sides}. \n";
	$handle = fopen ("php://stdin","r");
	$line = fgets($handle);

	if (strpos($line, "d") > 0) {
		$inputs = explode("d", $line);
	} else{
		echo "Input invlaid. Please enter input {number of dice}d{number of sides}";
		userInput();
	}
	

	$numDice = intval($inputs[0]) ;
	$numSides = intval($inputs[1]) ;
	rollDice($numDice, $numSides);
}


function rollDice($numDie, $sides){
	
	if (($sides < 2 || $sides > 100) || (filter_var($sides, FILTER_VALIDATE_INT) === false)) {
		echo "Number of sides must be between 2-100 \n";
		userInput();
	}

	if (($numDie < 1 || $numDie > 1000) || (filter_var($numDie, FILTER_VALIDATE_INT) === false)) {
		echo "Number of dice must be between 1-1000 \n";
		userInput();
	}

	for ($i=0; $i < $numDie; $i++) { 
		$results[] = rand(1, $sides);	
	}
	
	echo "Sum of dice roll = " . array_sum($results) . "\n";
	die();
}

userInput();

?>