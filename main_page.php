<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>릴레이션 선택</title>
</head>
<body>
  <form method="post" name="main_page" action="select_page.php">
    <h2>릴레이션을 선택하시오.(구매자, 대리인, 원자재, 주문, 계약)</h2>
    <p>
      <label for="relation">릴레이션을 선택하시오:</label>
      <input type="text" id="relation" name="relation"/>
    </p>
    <input type="submit" value="보내기"/>
  </form>
</body>
</html>
