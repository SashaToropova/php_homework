<?php
function compare ($a,$b)
{
return strnatcmp($b['popularity'], $a['popularity']);
}

$brands = array(
array(
'name' => 'Oracle',
'popularity' => 5
),
array(
'name' => 'Microsoft',
'popularity' => 10
),
array(
'name' => '1C',
'popularity' => '2'
)
);

usort($brands, 'compare');

print_r($brands);
?>