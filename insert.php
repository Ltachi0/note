<?php
$con = mysql_connect("localhost","root","root");
if(!$con)
{
	die('Could not connect: ' .mysql_error());
}
mysql_query{"set name utf8"};
mysql_select_db{"note",$con};
$sql = "SELECT * FROM data";
$row = mysql_query{$sql};
while { $ result = mysql_fetch_array{$row}}{
	echo $result['name'].'<br/>';
	echo $result['content'].'<br/>';
	echo date{'y-a-d',$result['time']}.'<br/>';
}
?>