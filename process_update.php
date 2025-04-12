<?php
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST로 받은 데이터
$contract_number = $_POST['contract_number'];
$contract_buyer = $_POST['contract_buyer'];

// UPDATE 쿼리 실행
$sql = "UPDATE 계약 SET 계약구매자 = '$contract_buyer' WHERE 계약번호 = '$contract_number'";

if ($conn->query($sql) === TRUE) {
    echo "계약 정보가 성공적으로 업데이트되었습니다.";
} else {
    echo "업데이트 실패: " . $conn->error;
}

$conn->close();
?>
