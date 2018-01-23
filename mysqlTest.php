



<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}
echo "Connected successfully\n";
$sql = 'CREATE Database test_Db2';
//  老的
//mysql_query('CREATE TEMPORARY TABLE `table`', $link);
//$retval = mysqli_query( $sql, $conn );
$retval = mysqli_query($conn,$sql);


if(! $retval ) {
    die('Could not create database: ' . mysqli_error());
}
echo "Database test_db created successfully\n";

mysqli_close($conn);

?>

