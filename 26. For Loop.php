<?php

    /* example 1 */
    echo "First Way <br>";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "<br>";
    }
    
    /* example 2 */
    echo "<br>Another Way <br>";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "<br>";
    }
echo "<br> Program executed by Niharika";
?>