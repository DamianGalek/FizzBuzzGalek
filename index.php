<?php 

for($i=1; $i<101; $i++)
{
    if($i%3==0) echo "Fizz";
    if($i%5==0) echo "Buzz";
	if($i%7==0) echo "Seven";
    if($i%3!=0 && $i%5!=0 && $i%7!=0) echo $i;
    echo "</br>";
}

?>
