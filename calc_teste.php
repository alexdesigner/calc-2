<pre><?php

	include	'calc.php';
	
	if (some(5,2)== 5+2)
		echo 'OK<br>';
	else
		echo 'erro<br>';
		
		
	if (subtrair(5,2)== 5-2)
		echo 'OK<br>';
	else
		echo 'erro<br>';
		
	if (multi(5,2)== 5*2)
		echo 'OK<br>';
	else
		echo 'erro<br>';
	
	if (divide(5,2)== 5/2)
		echo 'OK<br>';
	else
		echo 'erro<br>';
		
	
	if (some(5,multi(2,3)) == 5 + 2 * 3)
		echo 'OK<br>';
	else
		echo 'erro<br>';
	
	if (subtrair (8, some(3,5)) == 8 - (3 + 5))
		echo 'OK<br>';
	else
		echo 'erro<br>';
			
	if (some(divide(9,3),multi(4,2)) == 9 / 3 + 4 * 2)
		echo 'OK<br>';
	else
		echo 'erro<br>';

?></pre>