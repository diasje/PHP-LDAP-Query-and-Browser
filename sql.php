<?php
$sel = mysql_select_db($db, $con); 
    if (!$sel) 
    { 
    die('Could not select DB: ' . mysql_error()); 
    } 

    for ($i=0; $i<$entries["count"]; $i++) 
    { 

    $uac = $entries[$i]["useraccountcontrol"][0]; 
    $dep = $entries[$i]["department"][0]; 
	$disn = iconv("UTF-8", "ISO-8859-1", $entries[$i]["displayname"][0]);
	$name = $entries[$i]["name"][0]; 
	$empid = $entries[$i]["employeeid"][0]; 
	$mail = $entries[$i]["mail"][0]; 
	$l = $entries[$i]["l"][0]; 
	$logon = $entries[$i]["lastlogon"][0];
         
            mysql_query("
			INSERT INTO 
				$table (State, Departament, Name, User, Employe, Email, Local, lastlogn) 
            VALUES 
				('$uac', '$dep', '$disn', '$name', '$empid', '$mail', '$l', '$logon')
			ON DUPLICATE KEY UPDATE			
			Estado='$uac',
			Departamento='$dep',
			Nome='$disn',
			User='$name',
			Ne='$empid',
			Email='$mail',
			Local='$l',
			lastlogh='$logon'
		 ");

    } 

     
mysql_close($con); 
?>
