<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>릴레이션 보이기</title>
</head>
<body>
  <form method = "post" name = "select_page.php" action = "main_page.php">

</body>
<?php
echo "선택된 릴레이션 : ",$_POST['relation']."<br>";
$relation_post = $_POST['relation'];
$conn = mysqli_connect("localhost","root","","korea_db");
$sql = "select * from ".$relation_post.";";
$result = mysqli_query($conn,$sql);
$total_records = mysqli_num_rows($result);
$total_fields = mysqli_num_fields($result);
 ?>
 <table width = 800 border=1 cellpadding=10>
<?php
while($row = mysqli_fetch_row($result))
{
  echo"<tr>";
  for($i=0;$i<$total_fields;$i++){
    echo"<td align=center> $row[$i]</td>";
  }
  echo"</tr>";
}
mysqli_close($conn);
 ?>
 </table>
 <input type="submit" value="되돌리기">
 </html>
