<?php
	header("Content-type: text/html; charset=utf-8"); 
	$hash=$_GET['hash'];
   	$con=mysql_connect("localhost","root","root");
   	mysql_select_db("farmerinfo");
   	mysql_query("set names utf8");

    $sql = "SELECT * FROM base";
    $result = mysql_query($sql);
   	if ($result) {
   		while ($row = mysql_fetch_array($result)) {
       		$res=$row['id'].$row['name'].$row['code'].$row['total'].$row['area'];
       		$md5=md5($res);
       		echo $res."<br>";
       		echo $md5."<br>";
       		$updateSql="UPDATE base SET hash='".$md5."' WHERE id = ".$row['id'];
       		mysql_query($updateSql);
   		}
	}else{
		echo 'connect fail';
	}
   	mysql_close();
?>