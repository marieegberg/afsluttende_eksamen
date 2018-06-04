<?php
const HOSTNAME = 'localhost'; // server navn
const MYSQLUSER = 'root'; // super bruger (remote har man særskilte database brugere)
const MYSQLPASS = 'root'; // bruger password
const MYSQLDB = 'localhost'; // database navn 


$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

$con->set_charset('utf-8');


if($con->connect_error){ 
	die($con->connect_error);
}else {
	echo '<h2 style="text-align:center; color:black;">THANKS FOR YOUR REGISTRATION!<br> YOU WILL RECIVE AN EMAIL WHEN YOU CAN BUY THE TROLLEY.</h2><br>';
}

// hvis filen indeholder rent php kan slut tag undlades..