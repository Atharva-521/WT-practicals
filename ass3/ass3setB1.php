<?php
	$x = $_POST['s1'];
	$y = $_POST['s2'];

	$ch = $_POST['r'];

	echo "Large string is $x";
	echo "<br> Small string is $y<br>";

	if($ch==1)
	{
		if(preg_match("/^$y/",$x))
			echo "'$x' starts with '$y'";
		else 
			echo "'$x' does not start with '$y'";
	}
	else if($ch==2)
		echo "'$y' found at poistion:".strpos($x,$y);
	else if($ch==3)
	{
		if(strncasecmp($x,$y,3)==0)
			echo "First 3 characters of '$x' and '$y' are equal";
		else
			echo "First 3 characters of '$x' and small string '$y' are unequal";	
	}
?>
