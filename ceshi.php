<?php
//include_once('../../common.php');
header("content-Type: text/html; charset=Utf-8"); 
$conn=mysql_connect("rds3z8j0t5gs30kmr75x.mysql.rds.aliyuncs.com","tk","nbESPsvxZdJNxfnK"); 
if (!$conn)
{
echo "链接数据库服务器失败";
}

$db=mysql_select_db("tk",$conn);
if(!$db){
	echo "链接数据库失败";
}
mysql_query("set names 'utf8'");
//$sql="select * from tk.tk_casio3_photo";
$photo_id="01b70b2b97cacd1e986692cca18a0620";
$album_id="99995bf531b6300f295db1f2f72fce07";
$sql="INSERT INTO `tk`.`tk_casio3_photo` (`photo_id`, `album_id`, `type`, `attr_url`, `subject`, `votes`, `displayorder`, `status`, `dateline`) VALUES ('".$photo_id."', '".$album_id."', '0', 'http://img1.taskou.com/casio/20160205/6/20.JPG', '', '10', '0', '0', '1451565835');";
//echo $sql;
//$arr= mysql_query($sql);
$a=1;
/*while($re=mysql_fetch_array($arr)){
	echo "<pre>";
print_r($re);
	if($a>500){
		exit;	
	}
}*/
//aksdfjlkjsdlkfjklsf
echo '123';
exit;
?>