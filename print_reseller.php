<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
</head>
<body>
<h2> 대리인 입력창 </h2>
<form name = "reseller_form" method = "post" action = "store_reseller.php">
  <input type = "hidden" name="title" value="대리인 입력 양식">
  <table border ="1" width="640" cellspacing="1" cellpadding="4">;
  <tr>
    <td align = "right">* 대리인아이디 :</td>
    <td><input type = "text" size = "15" maxlength="12" name="rid" value="secondary"></td>
  </tr>
  <tr>
    <td align = "right">* 대리인이름 :</td>
    <td><input type="text" size="15" maxlength="12" name="rname"></td>
  </tr>
  <tr>
    <td align = "right">* 나이 : </td>
    <td><input type="number" size="15" maxlength="10" name="rage"></td>
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
