<?php

function addOne($num)
{
	return $num + 1;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Demo page</title>
	</head>

<body>

	<p>
		This is in the html
	</p>

<?php

	$email = "burtons@byui.edu";

	echo "<div>Please send email to: <a href='mailto:$email'>$email</a></div>\n";
?>

	<div>

		<p>
			This is a paragraph after the link...

<?php
	$newValue = addOne(6);

	echo "Got back a $newValue";

$list[] = 3;
$list[] = 4;
$list[] = 5;
$list["ten"] = 6;
$list[] = 7;

echo "<br /><br />";

foreach ($list as $thing)
{
	echo "$thing<br />";
}

foreach ($list as $key => $value)
{
	echo "k: $key, v: $value<br />";
}

echo "at spot 2: $list[2]<br/>";
echo "at spot 5: $list[5]<br/>";

$str = "Green eggs and ham";

$parts = explode(" ", $str);

foreach ($parts as $part)
{
	echo "p: $part<br/>";
}

$backAgain = implode(":", $list);

echo "back again: $backAgain<br />";

$final = str_replace(":", "#", $backAgain);

unset($final);

echo " final: $final<br />";


?>

		</p>
	</div>

</body>
</html>