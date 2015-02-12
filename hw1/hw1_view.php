<?php

function show(&$a)
{
    for ($i = 0; $i < count($a); $i++)
  {
    echo $i;
    echo ".";
    echo $a[$i];
    echo "\n";
  } 
}

?>
     