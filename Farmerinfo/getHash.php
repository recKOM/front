<?php
    header("Content-type: text/html; charset=utf-8"); 
    $id=$_GET['id'];
    $con=mysql_connect("localhost","root","root");
    mysql_select_db("farmerinfo");
    mysql_query("set names utf8");
    $sql = "SELECT * FROM base WHERE id = ".$id;
    $result = mysql_query($sql);
    $res="";
    if ($result) {
      while ($row = mysql_fetch_array($result)) {
          $res=$row['hash'];
          echo $res;
          break;
      }
    }else{
      echo '-1';
    }
    mysql_close();
?>

