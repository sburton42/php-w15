<!DOCTYPE html>
<html>
<body>

<div>
<?php

try
{
	$query = "Harrison Ford";

	$user = "phpbob";
	$pass = "cs313pass";

	$db = new PDO("mysql:host=127.0.0.1;dbname=movieTest", $user, $pass);
	echo "Connection established! :-)<br />";

	$sql = "SELECT name FROM actor WHERE name LIKE :name";

	$statement = $db->prepare($sql);
	$statement->bindValue(':name', '%' . $query . '%', PDO::PARAM_STR);
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo "Found: " . $row["name"] . "<br />\n";
	}

}
catch (PDOException $ex)
{
	echo "Error: " . $ex->getMessage();
	die();
}


?>
</div>

</body>

</html>