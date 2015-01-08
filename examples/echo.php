<?php

if (isset($_REQUEST['text']))
{
	echo $_REQUEST['text'] . " is awesome!";
}
else
{
	echo "Received nothing...";
}

?>