<?php
function read(&$st)
{
$answr = 'yes';
while (trim($answr) == 'yes')
{
    echo "Enter name and surname\n";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    array_push($st,$line);
    echo "Next? ";
    $answr = fgets($handle);
}
}

?>



