<?php
	$l=$_GET['str'];
	$s=$_GET['sep'];
	$sl1=$_GET['s1'];
	$ch=$_GET['r'];

	if($ch==1)
	{
		$arr=explode($s,$l);
		print_r($arr);
	}

	if($ch==2)
	{
		$t=str_replace($s,$sl1,$l);
		echo "Replaced string:".$t;
	}

	if($ch==3)
	{
		$last=strrchr($l,$s);
		echo "<br> Last word of string:".$last;
	}
?>
