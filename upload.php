<html>
<head>
<style type="text/css">
body {
	background-image: url(image/wood.jpg);
}
#main {
	background-color: #EBEBEB;
	float: none;
	height: 720px;
	width: 1200px;
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 0px;
	padding-left: 20px;
	margin-top: -8px;
	font-family: Calibri;
	font-size: 18px;
}
</style>
</head>
<body>
<div id="main">
<?php
$namafolder="gambar/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("travelling2")  or die("Gagal");
if (!empty($_FILES["picture"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['picture']['type'];
	$judul_gambar=$_POST['place'];
	$deskripsi_gambar=$_POST['deskripsi'];
	$user=$_POST['name'];
	$category=$_POST['category'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder.basename($_FILES['picture']['name']);		
		if (move_uploaded_file($_FILES['picture']['tmp_name'], $gambar)) {
			$sql="insert into travel(nama_user,place,picture,deskripsi,category) values ('$user','$judul_gambar','$gambar','$deskripsi_gambar','$category')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ".$gambar;
			echo "<p>User : $user</p>";
			echo "<p>Kategori : $category</p>";
			echo "<p>Judul Gambar : $judul_gambar</p>";		 
			echo "<p><img src=\"$gambar\" width=\"200\"/></p>";		   
			echo "<p>Deskripsi : $deskripsi_gambar</p>";
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}
?>
</div>
</body>
</html>