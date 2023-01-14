<?php

$dbhost = "localhost";
$dbuser = "id20078840_root";
$dbpass = "v>dy6cKbw>RBpTu3";
$dbname = "id20078840_loginsignup";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
