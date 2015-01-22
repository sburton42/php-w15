<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
	<div>
<?php

echo "The session variable is: " . $_SESSION["count"];

?>
	</div>
</body>

</html>