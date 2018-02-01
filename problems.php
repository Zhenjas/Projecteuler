//Problem 1
//---------------
<?php

$res = 0;
for($i=1;$i<1000;$i++){
	if(($i % 3 == 0) || ($i % 5 == 0)){
		$res += $i;
	}
}

echo $res;
?>

//Problem 2
//---------------
<?php

$x=0;    
$y=1; 
$countEvenNums = 0;
while(true)    
{    	
    $z = $x + $y;
	
    if ($z % 2 === 0) {
        $countEvenNums += $z;
    }
	
    if($z > 3000000){
		echo $countEvenNums;
		break;
    }
	
    $x=$y;       
    $y=$z;
} 
?>