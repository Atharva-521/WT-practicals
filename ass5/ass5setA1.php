<?php
    $fname = $_REQUEST['fname'];
    if(file_exists($fname))
    {
        $fp = fopen($fname,"r");
        while(!feof($fp)){
            echo "<br>".fgets($fp);
        }
        echo "<br>File Size is : ".filesize($fname);
    }else{
        echo "<br>File doesn't exists";
    }
?> 
