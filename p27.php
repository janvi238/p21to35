<?php
//Sort numbers aascending and descending order
$a=array(34,24,15,16,35,13);
sort($a);
echo "Ascending: ";
print_r($a);
rsort($a);
echo "<br> Desecending: ";
print_r($a);

?>