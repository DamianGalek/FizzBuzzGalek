<?php 
for($i=1; $i<101; $i++)
{
    $flaga = true;
    if($i%3==0)
    { 
        echo "Fizz";
        $flaga=false;
    }
    if($i%5==0)
    {
        echo "Buzz";
        $flaga=false;
    }
    if($i%7==0)
    {
        echo "Seven";
        $flaga=false;
    } 
    if($flaga) echo $i;
    echo "</br>";
}
?>
