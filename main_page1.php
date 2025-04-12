<?php
echo "선택된 릴레이션 : ",$_POST['relation']."<br>";
$relation_post = $_POST['relation'];
$conn = mysqli_connect("localhost","root","","db_test");
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
  for($i=0;$1<$total_fields;$i++){
    echo"<td align=center> $row[$i]</td>";
  }
  echo"</tr>";
}
mysqli_close($conn);
 ?>
