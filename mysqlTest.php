<?php
/**
* Created by MisterBigbooo.
* User: Zeno
* Date: 2018/1/23
* Time: 上午11:33
*/


$con = mysql_connect("localhost","root","123123");
if (!$con){
die('Could not connect: '.mysql_error());
}

mysql_close($con)

?>