<?php
  $connect = mysqli_connect("localhost", "root", "", "project");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

  $rid = mysqli_real_escape_string($connect, $_POST['rid']);
  $rname = mysqli_real_escape_string($connect, $_POST['rname']);
  $rage = mysqli_real_escape_string($connect, $_POST['rage']);


  $sql = "INSERT INTO 대리인 VALUES ('$rid', '$rname', $rage)";
  $result = mysqli_query($connect, $sql);

  if (!$result) {
    echo("레코드 삽입 실패: " . mysqli_error($connect));
  } else {
    echo("레코드 삽입 성공!");
  }

  mysqli_close($connect);

  // Redirect after PHP logic
  echo "<script>document.location.replace('print_reseller.php')</script>";
?>
