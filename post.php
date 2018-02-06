<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
}
.main {
	background-color: #EBEBEB;
	float: none;
	height: 720px;
	width: 1200px;
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 0px;
	padding-left: 20px;
	margin-top: -8px;
}
body {
	background-image: url(image/wood.jpg);
}
form {
	font-family: Calibri;
	font-size: 16px;
	background-color: #EBEBEB;
	margin-top: -8px;
	padding-top: 8px;
}
</style>
</head>
<body>
<center>
<div class="main">
<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="upload.php">
<table border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td width="125">
      <input type="file" name="picture" id="picture" value="choose file" />
    </td>
  </tr>
  <tr>
    <td>Your Name</td>
    <td width="8"> :</td>
    <td width="300"><input name="name" type="text" id="name" size="50" /></td>
  </tr>
  <tr>
    <td>Place </td>
    <td>:</td>
    <td><input name="place" type="text" id="place" size="50" /></td>
  </tr>
  <tr>
    <td>Categoty</td>
    <td>:</td>
    <td><p>
        <label>
          <input type="radio" name="category" value="Beach" id="category_0" />
          Beach</label>
        <br />
        <label>
          <input type="radio" name="category" value="Mountain" id="category_1" />
          Mountain</label>
        <br />
        <label>
          <input type="radio" name="category" value="Town" id="category_2" />
          Town</label>
        <br />
      </p></td>
  </tr>
  <tr>
    <td>Descriptive</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="104" colspan="3"><textarea name="deskripsi" id="deskripsi" cols="75" rows="10"></textarea></td>
    </tr>
  <tr>
    <td height="25" colspan="3"> <input type="reset" name="reset" id="reset" value="reset" />
      <input type="submit" name="submit" id="submit" value="upload" />
    </td>
    </tr>
</table>
</form>
</div>
</center>
</body>
</html>
