<?php
$var1 = 2;
$var2 = 4;

echo"La primera variable és: ".$var1." i la segona variable és: ".$var2;".";
echo"<br>";
$temp = $var1;
$var1 = $var2;
$var2 = $temp;
echo"Ara la primera variable és: ".$var1." i la segona variable és: ".$var2.".";
?>
