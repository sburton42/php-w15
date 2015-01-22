<html>
<body>
	<div>
<?php

$file = fopen("file2.txt", "r") or die("Unable to open file!");

while ($line = fgets($file))
{
	echo "line: $line<br />\n";
}

fclose($file);

echo "Using file_get_contents<br/>\n";

$content = file_get_contents("file.txt");
echo "Content: $content";

?>

</div>
</body>
</html>