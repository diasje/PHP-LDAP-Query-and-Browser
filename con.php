<?php
// Sepcify MySql Server
$sqlhost = "localhost";
//Specify MySql User
$sqluser = "root";
// Specify MySql Password
$sqlpass = "";
// Specify MySql Database
$db = "";
// Specify MySql Table
$table = "";
//Specify LDAP Server
$host = "ldap://HEICPT1VIA01.HEIWAY.NET";
//Specify User
$user = "heiway\diasj03";
// Specify Password
$pswd = "SCC.2013";
// DN to search
$dn = "OU=User,OU=Accounts,OU=PT1,DC=heiway,DC=net";
// Specify only those parameters we're interested in displaying
$attrs = array("department","displayName","mail","name","employeeid","l","useraccountcontrol","lastlogon");
// Connect to MySql Database
$con = mysql_connect("$sqlhost","$sqluser","$sqlpass"); 
    if (!$con) 
    { 
    die('Could not connect: ' . mysql_error()); 
    } 
?>
