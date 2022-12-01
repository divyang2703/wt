<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi i am divyang , A056, from B3 and currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
$txt = "Hi i am divyang , A056, from B3 and currently pursuing MCA from MPSTME\n";
fclose($myfile);
?>
