<?php
include "koneksi1.php";
if(isset($_POST['Simpan'])){
$z = $_POST['IDBarang'];
$x = $_POST['QTY'];
$c = $_POST['Harga'];
mysqli_query ($a, "INSERT INTO bayar SET idbrg='$z',qty='$x',harga='$c'");}
?>
	<Form Method="POST" action="">
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input name="IDBarang" type="text"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input name="QTY" type="number"></td>
		</tr>
		<tr>
		<td>Harga</td>
		<td><Input name="Harga" type="number"></td>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>