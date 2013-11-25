PHP-LDAP-Query-and-Browser
==========================

Query LDAP Server with PHP
==========================
You have a lot of software to query LDAP servers, but  nothing to work via web (intranet)
With this Script you can search the ldap server and display some info.
This expample is to search the ldap fro user info like State: enable or disabled, Department, Name (first and last), Username, Last Logon, etc.
You can change all of this by editing the con.php file.
/* ----- EDIT FILE CON.PHP ----- */
===================================
Fill in the LDAP server name user and password
$host = "ldap://branch.server.net";
$user = "domain\username";
$pswd = "somepass";

Change the dn for what you need to search, in the example below is set to search the users OU under Accounts and Local OU. 
Your Active Directory may be diferent, so feel free to change.
$dn = "OU=User,OU=Accounts,OU=PT1,DC=server,DC=net";

Another thing to change is the attributs to search for.
$attrs = array("department","displayname","mail","name","employeeid","l","useraccountcontrol","lastlogon");
In this example we use department, displayname, etc, remember to use only lowercase letters.
For example in Active Directory the display name attribute is set to displayName, but in this script you must write displayname.

If you whant to save the query to MySql server fallow the instructions below.

/* ----- SAVE QUERY TO MYSQL ----- */
=====================================
Another usefull thing is setting a database to save all the data fetched from LDAP server.
Fill in all the Sql fields in this file too. Dont forget to indicate the database name in $db and the table in $table.

$sqlhost = "localhost";
$sqluser = "root";
$sqlpass = "";
$db = "";
$table = "users";

NOTE: If you will be using a MySql database to save the query, use the sql code below:

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `User` varchar(50) DEFAULT NULL,
  `Employe` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Local` varchar(50) DEFAULT NULL,
  `lastlogon` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

Or import the import-db.sql  into phpMyadmin.

Now open search_users.php
And uncomment the lines below /* ----- START DB INSERT ------ */ until /* ----- END DB INSERT ------ */

Please refer to http://diasje.com for more instrctions and Help.



     

