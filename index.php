<?php 
for($i=1; $i<101; $i++)
{
    $writeNumber = true;
    if($i%3==0)
    { 
        echo "Fizz";
        $writeNumber=false;
    }
    if($i%5==0)
    {
        echo "Buzz";
        $writeNumber=false;
    }
    if($i%7==0)
    {
        echo "Seven";
        $writeNumber=false;
    } 
    if($writeNumber) echo $i;
    echo "</br>";
}
?>
