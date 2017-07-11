<?php
	header("Content-type: text/html; charset=utf-8"); 
	$hash=$_GET['hash'];
   	$con=mysql_connect("localhost","root","root");
   	mysql_select_db("farmerinfo");
   	mysql_query("set names utf8");

    $sql = "SELECT * FROM base WHERE hash='".$hash."'";
    $result = mysql_query($sql);

   	if ($result) {
   		while ($row = mysql_fetch_array($result)) {
       		$res=$row['id'].'&'.$row['name']."&".$row['code']."&".$row['total']."&".$row['area'];
       		echo $res;
       		break;
   		}
	}else{
		echo 'connect fail';
	}
   	mysql_close();
?>