<?php

$file = fopen("file.txt", "r") or die("Unable to open file!");

while (feof($file))
{
	$line = fgets($file);
	echo "line: $line\n";
}

fclose($file);

?>