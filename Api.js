$(document).ready(function(){
	$('#simpan').click(function(){
		var nama = $('#nama').val()
		var umur = $('#umur').val()
		var tanggal = $('#tanggal').val()
		var id = $('#id').val()
		axios.post('simpan.php',{
			'nama': nama,
			'umur': umur,
			'tanggal': tanggal,
			'id': id
		}).then(function(res){
			var simpan = res.data
			alert(simpan)
			autoload()
		}).catch(function(err){
			alert(err)
		})
	}) 
	autoload()
})

// tampil data
function autoload()
{
	axios.get('tampil.php').then(function(res){
		var dataTampil = res.data;
		$('#isi').html(dataTampil)
		kosong()
	}).catch(function(err){
		alert(err)
	})
}
// mengosongkan Data
function kosong()
{
	document.getElementById('nama').value = '';
	document.getElementById('umur').value = '';
	document.getElementById('tanggal').value = '';
	document.getElementById('id').value = '';
}
// fungsi Edit Data
function edit(id)
{
	axios.get('edit.php?id='+id).then(function(res){
		var dataTampil = res.data;
		document.getElementById('nama').value = dataTampil.nama;
		document.getElementById('umur').value = dataTampil.umur;
		document.getElementById('tanggal').value = dataTampil.tanggal;
		document.getElementById('id').value = dataTampil.id;
	}).catch(function(err){
		kosong()
		alert(err)
	})
}

// fungsi Hapus
function hapus(id)
{
	axios.get('hapus.php?id='+id).then(function(res){
		var hapus = res.data
		alert(hapus)
		autoload()
	}).catch(function(err){
		alert(err)
	})
}