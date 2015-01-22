<?php

$file = fopen("file.txt", "a") or die("Unable to open file!");
$txt = "visited\n";

fwrite($file, $txt);

fclose($file);

?>