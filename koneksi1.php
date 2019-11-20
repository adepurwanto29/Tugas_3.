  
<?php
$a = mysqli_connect ("localhost","root","","semester3");
if ($a){
	echo "koneksi sukses";
}else{
	echo "koneksi gagal!" .mysqli_connect_error();
	die;
}
?>