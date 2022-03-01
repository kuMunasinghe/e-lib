
<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='lib_db';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
    die("COnnection Failed ".mysqli_connect_error());
}
?>