<?php

const NUMBER = 600851475143;
	
function is_prime($num)
{
   for ($x = 2; $x <= sqrt($num); $x++){
      if (!($num % $x)) return false;
   }
   return true;
}

function solveProblem()
{
	$i=1;
	while($i <= sqrt(NUMBER)){
		if ((NUMBER % $i) == 0) {
			if(is_prime($i)){
				$result = $i;
			}
		}
		$i++;
	}
	return $result;
}

echo "Result: ".solveProblem();
  