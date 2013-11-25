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
$host = "ldap://bracnh.server.NET";
//Specify User
$user = "domain\username";
// Specify Password
$pswd = "somepass";
// DN to search - you can use LdapAdmin.org to fetch this data
$dn = "OU=User,OU=Accounts,OU=PT1,DC=heiway,DC=net";
// Specify only those parameters we're interested in displaying LdapAdmin.org to fetch this data
$attrs = array("department","displayName","mail","name","employeeid","l","useraccountcontrol","lastlogon");
// Connect to MySql Database
$con = mysql_connect("$sqlhost","$sqluser","$sqlpass"); 
    if (!$con) 
    { 
    die('Could not connect: ' . mysql_error()); 
    } 
?>
