<?php 
for($i=1; $i<101; $i++)
{
    $output="";
    if($i%3==0)
    { 
        $output="Fizz";
    }
    if($i%5==0)
    {
        $output=$output."Buzz";
    }
    if($i%7==0)
    {
        $output=$output."Seven";
    } 
    if($output=="") $output=$i;
    echo $output."</br>";
}
?>
