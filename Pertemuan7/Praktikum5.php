<?php

	$a = 5;
	$b = 4;
	echo "$a == $b : ". ($a == $b);			//false
	echo "<br>$a != $b : ". ($a != $b);		//true
	echo "<br>$a > $b : ". ($a > $b);		//true
	echo "<br>$a < $b : ". ($a < $b);		//false
	echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));	//true
	echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));	//true

?>