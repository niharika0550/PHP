<?php

$number = 4200;
$factors = array();

for($i=1; $i<=$number; $i++)
{
  if($number%$i ==0)
   {
     $factors[]=$i;
   }

  if(count($factors)==10)
   {
      break;
    }
}

echo "First 10 factors of 4200 are: <br>";

foreach($factors as $factor)
{
  echo $factor."<br>";
}

echo "<br> Program executed by Niharika";

?>