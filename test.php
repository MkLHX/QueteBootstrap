<?php
	function test($num){
		if ($num % 3 == 0 and $num % 5 == 0){
			return 'fizzbuzz';
		}
		elseif ($num % 5 == 0) {
			return 'buzz';
		}
		elseif ($num % 3 == 0) {
			return 'fizz';
		}
		else { 
			return $num;
		}
	};

	echo test(42);
	echo test(15);
?>