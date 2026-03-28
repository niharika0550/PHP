<?php

    function selfMultiply(&$number)
    {
        $number *= $number;
        return $number;
    }
     
    $mynum = 5;
    echo $mynum . "<br>"; // Outputs: 5
     
    selfMultiply($mynum);
    echo $mynum; // Outputs: 25
  echo "<br> Program executed by Niharika";    
?>