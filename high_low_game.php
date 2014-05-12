<?php

// Game picks number from 1 to 100.
define('LOWEND', 1);
define('HIEND', 100);
$number = mt_rand(LOWEND, HIEND);
// User is prompted to guess a number.
fwrite(STDOUT, "Guess a number from " . LOWEND . " and " . HIEND . ".\n");
$guess = (int) fgets(STDIN);
$guesses = 1;

// If guess is wrong, feedback given and user asked for another guess.
while ($guess != $number){
	if ($guess > $number){
		fwrite(STDOUT, "Nice try, but go lower! \n");
		$guess = (int)fgets(STDIN);
		$guesses++;
	}
	else {
	fwrite(STDOUT, "Nice try, but go higher! \n");
		$guess = (int)fgets(STDIN);
		$guesses++;
	}
}
// If user guesses number, game ends with winning message.
fwrite(STDOUT, "YOU WIN!!!11!\n");
fwrite(STDOUT, "It took you $guesses guesses.\n");
exit(0);

?>