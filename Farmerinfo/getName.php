<?php
  header("Content-type: text/html; charset=utf-8"); 
    $con=mysql_connect("localhost","root","root");
    mysql_select_db("farmerinfo");
    mysql_query("set names utf8");
    $sql = "SELECT * FROM base ";
    $result = mysql_query($sql);
    $name=array();
    $id=array();
    if ($result) {
      while ($row = mysql_fetch_array($result)) {
          array_push($name, $row['name']);
          array_push($id, $row['id']);
      }
      $result=array('name'=>$name,'id'=>$id);
      echo json_encode($result);
    }else{
    echo 'connect fail';
    }
    mysql_close();
?>