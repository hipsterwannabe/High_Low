<?php

// User provides low and high numbers for computer.
define('LOWEND', $argv[1]);
define('HIEND', $argv[2]);
// Error if two numbers are not provided.
if ($argc < 3) {
	echo "Please enter two numbers to play.\n";
	exit(1);
}
// Computer generates ranomd number between user defined bounds.
$number = mt_rand(LOWEND, HIEND);
// User is prompted to guess a number.
fwrite(STDOUT, "Guess a number from " . LOWEND . " and " . HIEND . " in ten guesses to win.\n");
$guess = (int) fgets(STDIN);
$guesses = 1;

// If guess is wrong, feedback given and user asked for another guess.
while ($guess != $number && $guesses <= 10){
	if ($guess > $number){
		fwrite(STDOUT, "Nice try, but go lower! \n");
		}
	else {
	fwrite(STDOUT, "Nice try, but go higher! \n");
		
	}
	$guess = (int)fgets(STDIN);
	$guesses++;
}
// If user guesses number, game ends with winning message. If user fails to guess
// number in a certain number of guesses, user loses.
if ($guesses <= 10){
	fwrite(STDOUT, "YOU WIN!!11!1!\n");
	fwrite(STDOUT, "It took you $guesses guesses.\n");
} else {
	fwrite(STDOUT, "YOU LOSER! You couldn't guess $number!\n");
}
exit(0);

?>