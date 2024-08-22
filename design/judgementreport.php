<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #990000;
}
-->
</style></head>

<body>
<form action="judgementreportinsert.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="324" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Judgement report </div></td>
    </tr>
    <tr>
      <td width="137">judgement report id </td>
      <td width="171"><input name="judgement_report_id" type="text" id="judgement_report_id" /></td>
    </tr>
    <tr>
      <td>case detail id </td>
      <td><input name="case_detail_id" type="text" id="case_detail_id" /></td>
    </tr>
    <tr>
      <td>case report id </td>
      <td><input name="case_report_id" type="text" id="case_report_id" /></td>
    </tr>
    <tr>
      <td>judgement description </td>
      <td><textarea name="judgement_description" id="judgement_description"></textarea></td>
    </tr>
    <tr>
      <td>attach report </td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <td>case date </td>
      <td><input name="case_date" type="date" id="case_date" /></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input name="status" type="text" id="status" /></td>
    </tr>
    <tr>
      <td>article id </td>
      <td><input name="article_id" type="text" id="article_id" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit18" value="save" /></td>
      <td><input type="submit" name="Submit19" value="cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
