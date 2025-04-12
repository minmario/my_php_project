<?php
$conn = new mysqli("localhost", "root", "", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 삽입 처리
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $주문번호 = $_POST['주문번호'];
    $주문대리인 = $_POST['주문대리인'];
    $주문원자재 = $_POST['주문원자재'];
    $수량 = $_POST['수량'];
    $배송지 = $_POST['배송지'];
    $주문일자 = $_POST['주문일자'];

    $insert_query = "INSERT INTO 주문 (주문번호, 주문대리인, 주문원자재, 수량, 배송지, 주문일자)
                     VALUES ('$주문번호', '$주문대리인', '$주문원자재', $수량, '$배송지', '$주문일자')";

    if ($conn->query($insert_query) === TRUE) {
        echo "새로운 주문이 추가되었습니다.";
    } else {
        echo "에러: " . $insert_query . "<br>" . $conn->error;
    }
}

// 삭제 처리
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $delete_order_number = $_POST['delete_order_number'];

    $delete_query = "DELETE FROM 주문 WHERE 주문번호 = '$delete_order_number'";

    if ($conn->query($delete_query) === TRUE) {
        echo "주문이 삭제되었습니다.";
    } else {
        echo "에러: " . $delete_query . "<br>" . $conn->error;
    }
}

// 데이터 조회 쿼리
$sql = "SELECT * FROM 주문";
$result = $conn->query($sql);

$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주문 데이터 조회</title>
</head>
<body>
    <h2>주문 데이터 조회</h2>
    <table border="1">
        <tr>
            <th>주문번호</th>
            <th>주문대리인</th>
            <th>주문원자재</th>
            <th>수량</th>
            <th>배송지</th>
            <th>주문일자</th>
            <th>삭제</th>
        </tr>

        <?php
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>{$row['주문번호']}</td>";
            echo "<td>{$row['주문대리인']}</td>";
            echo "<td>{$row['주문원자재']}</td>";
            echo "<td>{$row['수량']}</td>";
            echo "<td>{$row['배송지']}</td>";
            echo "<td>{$row['주문일자']}</td>";
            echo "<td><form method='post' action=''>
                      <input type='hidden' name='delete_order_number' value='{$row['주문번호']}'>
                      <input type='submit' name='delete' value='삭제'>
                  </form></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>새로운 주문 추가</h2>
    <form method="post" action="">
        주문번호: <input type="text" name="주문번호" required><br>
        주문대리인: <input type="text" name="주문대리인" required><br>
        주문원자재: <input type="text" name="주문원자재" required><br>
        수량: <input type="number" name="수량" required><br>
        배송지: <input type="text" name="배송지" required><br>
        주문일자: <input type="text" name="주문일자" required><br>
        <input type="submit" name="insert" value="추가">
    </form>
</body>
</html>
