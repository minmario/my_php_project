<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contract</title>
</head>
<body>

<?php
// 연결 정보 설정


// 데이터베이스 연결
$conn = new mysqli("localhost", "root", "", "project");

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 계약번호가 전달되면 해당 계약 정보를 불러옴
if (isset($_GET[''])) {
    $contract_number = $_GET['contract_number'];

    // 해당 계약 정보 가져오기
    $sql = "SELECT * FROM 계약 WHERE 계약번호 = '$contract_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

        <h2>Update Contract</h2>
        <form action="process_update.php" method="post">
            <label for="contract_number">계약번호:</label>
            <input type="text" name="contract_number" value="<?php echo $row['계약번호']; ?>" readonly>
            <br>
            <!-- 다른 필드도 유사한 방식으로 추가 -->
            <label for="contract_buyer">계약구매자:</label>
            <input type="text" name="contract_buyer" value="<?php echo $row['계약구매자']; ?>">
            <br>
            <!-- 다른 필드도 유사한 방식으로 추가 -->
            <input type="submit" value="Update">
        </form>

        <?php
    } else {
        echo "해당하는 계약이 없습니다.";
    }
} else {
    echo "계약번호가 전달되지 않았습니다.";
}

// 데이터베이스 연결 닫기
$conn->close();
?>

</body>
</html>
