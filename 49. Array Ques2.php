<?php

$students=array("Roll101" => 95, "Roll102" =>92, "Roll103" => 90, "Roll104" => 88, "Roll105" =>85);

echo "Top 5 Students Result: <br> <br>";

foreach($students as $rollNo => $marks)
{
  echo "Roll Number: ". $rollNo. "-Marks:". $marks. "<br>";
}

echo "<br> Program executed by Niharika";

?>