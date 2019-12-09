<?php
$conn=mysql_connect("localhost","root","root");
mysql_select_db("seguretat",$conn);

$sql="SELECT * from news where id = '".$_GET["id"]."' ";
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);

echo '<table>
<tr>
<td>Title</td>
<td>Body</td>
<td>Date</td>
</tr>
<tr>
<td>'.$result["title"].'</td>
<td>'.$result["body"].'</td>
<td>'.$result["datetime"].'</td>
</tr>
</table>';
?>
