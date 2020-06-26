<?php
$con = new mysqli('localhost','root','','axios') OR die('JAN ERROR');

$id = $_GET['id'];
$data = $con->query("SELECT * FROM tb_data WHERE id='$id'")->fetch_assoc();
echo json_encode($data); 