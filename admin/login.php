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
<form id="form1" name="form1" method="post" action="logininsert.php">
  <p>&nbsp;</p>
  <table width="269" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">login form </div></td>
    </tr>
    <tr>
      <td width="83">username</td>
      <td width="170"><input name="username" type="text" id="username" /></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="password" type="password" id="password" /></td>
    </tr>
    <tr>
      <td>type</td>
      <td><select name="type" id="type">
        <option>user</option>
        <option>admin</option>
      </select>      </td>
    </tr>
    <tr>
      <td>hint question </td>
      <td><select name="hint_question" id="hint_question">
        <option>what is your favorite colour</option>
        <option>what is your pet name</option>
        <option>what is your father name?</option>
        <option>what is your nick name?</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>hint answer </td>
      <td><input name="hint_answer" type="text" id="hint_answer" /></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input name="status" type="text" id="status" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Submit" msg="login successful" />
           <input type="reset" name="Submit2" value="reset" />
        </div>
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
