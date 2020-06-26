<?php
$con = new mysqli('localhost','root','','axios') OR die('JAN ERROR');
$json = file_get_contents('php://input');
$_POST = json_decode($json,true);
if($_POST['id']== NULL OR $_POST['id'] == 0)
{
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$tanggal = $_POST['tanggal'];
	$con->query("INSERT INTO tb_data (nama,umur,tanggal) VALUES ('$nama','$umur','$tanggal')");
}else{
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$tanggal = $_POST['tanggal'];
	$con->query("UPDATE tb_data SET nama='$nama',umur='$umur',tanggal='$tanggal' WHERE id='$id' ");
}
$pesan = "Data Berhasil";
echo json_encode($pesan);