<?php
$con = new mysqli('localhost','root','','axios') OR die('JAN ERROR');

$data = $con->query("SELECT * FROM tb_data");
foreach($data as $a){
	echo"<tr>
			<td>".$a['nama']."</td>
			<td>".$a['umur']."</td>
			<td>".$a['tanggal']."</td>
			<td>
				<button type='button' onclick='edit(".$a['id'].")'>Edit</button>
				&nbsp;&nbsp;
				<button type='button' onclick='hapus(".$a['id'].")'>Delete</button>
			</td>
		</tr>";
}
?>