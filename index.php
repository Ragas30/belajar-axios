<!DOCTYPE html>
<html>
<head>
	<title>belajar axio</title>
</head>
<body>
	<!-- Input Data -->
<input type="text" id="nama">
<input type="number" id="umur">
<input type="date" id="tanggal">
<input type="hidden" id="id">
<button type="button" id="simpan">Simpan</button>
<!-- Tampil Data -->
<table>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Umur</th>
			<th>Tanggal</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody id="isi"></tbody>
</table>
<!-- script -->
<script src="jquery.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="Api.js"></script>
</body>
</html>