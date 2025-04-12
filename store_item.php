<?php
  $connect = mysqli_connect("localhost", "root", "", "project");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

  $inum = mysqli_real_escape_string($connect, $_POST['inum']);
  $iname = mysqli_real_escape_string($connect, $_POST['iname']);
  $icount = mysqli_real_escape_string($connect, $_POST['icount']);
  $iprice = mysqli_real_escape_string($connect, $_POST['iprice']);
  $iprovider = mysqli_real_escape_string($connect, $_POST['iprovider']);

  $sql = "INSERT INTO 원자재 VALUES ('$inum', '$iname', $icount, $iprice, '$iprovider')";

  $result = mysqli_query($connect, $sql);

  if (!$result) {
    echo("레코드 삽입 실패: " . mysqli_error($connect));
  } else {
    echo("레코드 삽입 성공!");
  }

  mysqli_close($connect);

  // Redirect after PHP logic
  echo "<script>document.location.replace('print_item.php')</script>";
?>
