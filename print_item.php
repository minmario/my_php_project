<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
</head>
<body>
<h2> 원자재 입력창 </h2>
<form name = "item_form" method = "post" action = "store_item.php">
  <input type = "hidden" name="title" value="원자재 입력 양식">
  <table border ="1" width="640" cellspacing="1" cellpadding="4">;
  <tr>
    <td align = "right">* 원자재번호 :</td>
    <td><input type = "text" size = "15" maxlength="12" name="inum" value="new"></td>
  </tr>
  <tr>
    <td align = "right">* 원자재명 :</td>
    <td><input type="text" size="15" maxlength="12" name="iname"></td>
  </tr>
  <tr>
    <td align = "right">* 재고량 : </td>
    <td><input type="number" size="15" maxlength="10" name="icount"></td>
  </tr>
  <tr>
    <td align = "right">* 단가 : </td>
    <td><input type="number" size="15" maxlength="12" name="iprice"></td>
  </tr>
  <tr>
    <td align = "right">* 공급업체 : </td>
    <td><input type="text" size="15" maxlength="12" name="iprovider"></td>
  </tr>
  </table>
  <br>
  <table border = "0" width= "640">
    <tr><td align="center">
      <input type="submit" value="확인">
      <input type="reset" value="다시작성"></td>
    </tr>
  </table>
</form>
</body>
</html>
