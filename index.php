<?php 
for($i=1; $i<101; $i++)
{
    $flaga = false;
    if($i%3==0)
    { 
        echo "Fizz";
        $flaga=true;
    }
    if($i%5==0)
    {
        echo "Buzz";
        $flaga=true;
    }
    if($i%7==0)
    {
        echo "Seven";
        $flaga=true;
    } 
    if($flaga) echo $i;
    echo "</br>";
}
?>
