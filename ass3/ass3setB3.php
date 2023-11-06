<?php
	$name=$_GET['name'];
	$col=$_GET['col'];
	$msg=$_GET['msg'];

	function greeting($name='Guest',$col='Unknown',$msg='Welcome')
	{
		echo "<br> $msg $name!! Your college name is $col";
	}

	if(!empty($name) && !empty($col) && !empty($msg))
		greeting($name,$col,$msg);
	else if(!empty($name) && !empty($col))
		greeting($name,$col);
	else if(!empty($name))
		greeting($name);
	else 
		greeting();

?>
