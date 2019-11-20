
<?php
include "koneksi1.php";
if(isset($_POST['Simpan'])){
$Merek = $_POST['MEREK'];
$Harga = $_POST['HARGA'];
mysqli_query ($a, "INSERT INTO t_barang SET merek='$Merek',harga='$Harga'");}
?>
	<Form Method="POST" action="">
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input name="MEREK" type="text"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="HARGA" type="number"></td>
		</tr>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>