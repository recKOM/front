<!DOCTYPE html>
<html>
<body>

<?php
header("Content-type: text/html; charset=utf-8");
$con=mysql_connect("localhost","root","root");
mysql_select_db("farmerinfo");
mysql_query("set names utf8");
$sql = "SELECT name  FROM base ";
$result = mysql_query($sql,$con);
$res="";
//if ($result) {
//    while ($row = mysql_fetch_array($result)) {
//        $res=$row['hash'];
//        echo $res;
//        echo "<br>";
//        #break;
//    }
//}else{
//    echo '-1';
//}
echo "<select>";
$count = count($result);
    while($row=mysql_fetch_array($result)){
        for($i=0;$i<$count;$i++){
        echo "<option>$row[$i]</option>";
        echo "<br>";
        #echo'<option value="'.$res[$i].'">nice</option>';
    }
}
echo "</select>";
mysql_close();
?>



</body>
</html>