<?php
//display array in reverse order
$a=array(51,52,54,56,57,54);
for($i=5;$i>=0;$i--){
    echo "$a[$i]";
    echo "<br>";
}
echo "<br>";
print_r(array_reverse($a));

?>