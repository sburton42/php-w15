<?php

$file = fopen("file2.txt", "a+") or die("Unable to open file!");
$txt = "visited\n";

fwrite($file, $txt);

fclose($file);

echo "Wrote to file (2)..."

?>