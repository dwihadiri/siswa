<!DOCTYPE html>
<html lang="en">
<head>
  <title>PODOMORO UNIVERSITY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">

            function hapus(id){
                var dika =  confirm('Are you sure you want to delete!');
                    if(dika) 
                    window.location='<?php echo $base_url."belajar/hapus/"?>'+id;
                }
                function tampil_tambah(){
                    document.getElementById( 'hide_list_data' ).style.display = 'none';
                    document.getElementById( 'Show_data' ).style.display = 'inline';
                    document.getElementById('btn_tambah').style.display = 'none';
                }
                 
        </script>
<body>
<form name="formSiswa" id="formSiswa" method="post" action="save_siswa.php">
<div class="container">
  <h2>University Podomoro</h2>
  <p>Form Input Laporan Perkuliahan</p>
  <form>
    <div class="form-group">
      <label for="nim">NIM:</label>
      <input name="nim" id="nim" type="text" class="form-control">
    </div>
	<div class="form-group">
      <label for="nama">Nama:</label>
      <input name="nama" id="nama" type="text" class="form-control">
    </div>
	<div class="form-group">
      <label for="jurusan">Jurusan:</label>
      <input name="jurusan" id="jurusan" type="text" class="form-control">
    </div>
	<div class="form-group">
      <label for="kelas">Kelas:</label>
      <input name="kelas" id="kelas" type="text" class="form-control">
    </div>
	<div class="form-group">
      <label for="matakuliah">Mata Kuliah:</label>
      <input name="matakuliah" id="matakuliah" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="namadosen">Nama Dosen:</label>
      <input name="namadosen" id="namadosen" type="text" class="form-control">
    </div>
  </form>
  <input type="submit" name="save" value="save" />
  
</div>
</div>

</body>
</html>