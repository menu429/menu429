<?php
	$file = fopen("hi.txt", "r");
	for ($i = 1; $i < 5; $i++)
	echo "Hello World!" . "<br />";
	while(!feof($file))
	{
		echo fgets($file). "<br />";
	}
?>