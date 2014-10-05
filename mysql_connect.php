<?php

/*  
    Amarnath Maddireddy 
    http://www.amreddys.com
*/
   
$db_host = "localhost";
$db_username = "UserName";
$db_password = "PassWord";
$db_database = "DataBase";

//================ The traditional way ================
/* This method is given just for reference and it is not at all preferable to use this in real time as it is vulnerable
$con = mysql_connect($db_host, $db_username, $db_password); //Connect to the database
if ($con)
{
    $selDb = mysql_select_db($db_database, $con);
    if(!$selDb)
    {
        die("Unable to select database : ".mysql_error());
    }
}
else
{
    die('Could not connect: ' . mysql_error());
}


//================ The procedural way ================
// Here i in the MySQLi stands for improved.
$con=mysqli_connect($db_host, $db_username, $db_password,$db_database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


*/
//=================== The Object Oriented Way ====================
// We here at A M Reddy's prefer this way
$con=new mysqli($db_host, $db_username, $db_password,$db_database);

if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') '. $con->connect_error);
}
