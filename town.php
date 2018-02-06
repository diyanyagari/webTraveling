<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #D6D6D6;
	font-family: Calibri;
	font-size: 18px;
}
</style>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("travelling2")  or die("Gagal");
$sql="select nama_user,place,picture,deskripsi,category from travel where category='Town'";
$result = mysql_query($sql);
$i=0;
if(mysql_num_rows($result)>0)
	{
			while($row = mysql_fetch_object($result)) {
		    if (($i % 1) == 0){echo "<br>";}
		 echo '&nbsp; <img src="'.$row->picture.'" alt="'.$row->place.'" title="'.$row->place.'" width="300" height="300"/>';
		 echo '<br>User Name : '.$row->nama_user.'';
		 echo '<br>Lokasi : '.$row->place.'';
		 echo '<br>Kategori  : '.$row->category.'';
		 echo '<br>Deskripsi : '.$row->deskripsi.'';
		 echo "<br>";
		 $i++;
     }
} else {
     echo "0 results";
}
?>
</body>
</html>