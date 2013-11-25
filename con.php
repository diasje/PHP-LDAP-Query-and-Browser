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
$host = "ldap://branch.server.net";
//Specify User
$user = "domain\username";
// Specify Password
$pswd = "somepass";
// DN to search - you can use LdapAdmin.org to fetch this data
$dn = "OU=User,OU=Accounts,OU=PT1,DC=server,DC=net";
// Specify only those parameters we're interested in displaying LdapAdmin.org to fetch this data
$attrs = array("department","displayName","mail","name","employeeid","l","useraccountcontrol","lastlogon");
?>
