<?php
$con = new mysqli('localhost','root','','axios') OR die('JAN ERROR');
$id = $_GET['id'];
$con->query("DELETE FROM tb_data WHERE id='$id'");
$pesan = "DATA TERHAPUS";
echo json_encode($pesan); 