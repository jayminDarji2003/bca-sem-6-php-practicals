<?php
// Sample array
$array = array(5, 2, 8, 3, 9, 4);

// Sort in ascending order
sort($array);
echo "Ascending Order: ";
print_r($array);

echo "<br>";

// Sort in descending order
rsort($array);
echo "Descending Order: ";
print_r($array);
?>
