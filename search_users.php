<?php
/* ----- PHP LDAP QUERY ----- */
// With this script you can query a certain ldap server and fetch a few user data
// there is an option to save the query to database, just fallow the instructions in the readme file
// if you wold like some support, please refer to http://diasje.com
/* ----- PHP LDAP QUERY ----- */


// Designate a few variables
error_reporting(0);
// Fetch variables file
include 'con.php';

//Connect to LDAP server
$ad = ldap_connect($host)
      or die( "Could not connect!" );

// Set version number
ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3)
     or die ("Could not set ldap protocol");

// Binding to LDAP server
$bd = ldap_bind($ad, $user, $pswd)
      or die ("Could not bind");

// Create the filter from the search parameters
$filter = $_POST['filter']."=".$_POST['keyword']."*";

$search = ldap_search($ad, $dn, $filter, $attrs)
          or die ("ldap search failed");

$entries = ldap_get_entries($ad, $search);

/* ----- START DB INSERT ------ */
// Insert into MySql DB (Optional) Uncomment the lines below
// $sel = mysql_select_db($db, $con); 
//     if (!$sel) 
//     { 
//     die('Could not select DB: ' . mysql_error()); 
//     } 
// 
//     for ($i=0; $i<$entries["count"]; $i++) 
//     { 
// 
//     $uac = $entries[$i]["useraccountcontrol"][0]; 
//     $dep = $entries[$i]["department"][0]; 
// 	$disn = iconv("UTF-8", "ISO-8859-1", $entries[$i]["displayname"][0]);
// 	$name = $entries[$i]["name"][0]; 
// 	$empid = $entries[$i]["employeeid"][0]; 
// 	$mail = $entries[$i]["mail"][0]; 
// 	$l = $entries[$i]["l"][0]; 
// 	$logon = $entries[$i]["lastlogon"][0];
//          
//             mysql_query("
// 			INSERT INTO 
// 				$table (State, Departament, Name, User, Employe, Email, Local, lastlogn) 
//             VALUES 
// 				('$uac', '$dep', '$disn', '$name', '$empid', '$mail', '$l', '$logon')
// 			ON DUPLICATE KEY UPDATE			
// 			Estado='$uac',
// 			Departamento='$dep',
// 			Nome='$disn',
// 			User='$name',
// 			Ne='$empid',
// 			Email='$mail',
// 			Local='$l',
// 			lastlogh='$logon'
// 		 ");
// 
//     } 
//   mysql_close($con); 
/* ----- END DB INSERT ------ */

if ($entries["count"] > 0) {
  echo "<table border='1' width='100%'>";
  echo "<tr>";
    echo "<td>State:</td>";
  echo "<td>Departament:</td>";
  echo "<td>Name:</td>";
  echo "<td>User:</td>";
  echo "<td>Employe Number:</td>";
  echo "<td>Email:</td>";
	echo "<td>Local:</td>";
  echo "</tr>";
  
for ($i=0; $i<$entries["count"]; $i++) {
  echo "<tr>";
   echo "<td>".$entries[$i]["useraccountcontrol"][0]."</td>";
   echo "<td>".$entries[$i]["department"][0]."</td>";
  echo iconv("UTF-8", "ISO-8859-1","<td>".$entries[$i]["displayname"][0]."</td>");
    echo "<td>".$entries[$i]["name"][0]."</td>";
  echo "<td>".$entries[$i]["employeeid"][0]."</td>";
  echo "<td> <a href='mailto:".$entries[$i]["mail"][0]."'>".$entries[$i]["mail"][0]."</a></td>";
   echo "<td>".$entries[$i]["l"][0]."</td>";
  echo "</tr>";
}
  echo "</table>";
} else {
   echo iconv("UTF-8", "ISO-8859-1","<p>Ops nothing found!</p>");
}

ldap_unbind($ad);
?>
