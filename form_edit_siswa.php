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
	<body>

	<?php  
    $conn = mysql_connect("localhost", "root", "");  
    mysql_select_db("absensi_siswa");  
    $query = "select * from siswa where nim='".mysql_real_escape_string($_GET['id'])."'";  
    $hasil = mysql_query($query);  
    $siswa = mysql_fetch_array($hasil);  
    ?>  
    <form action="edit_siswa.php" method="post">
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
     
        <div>
		
		<input type="submit" name="update" value="update" /> 
		</div>  
       
     </form> 
</body>
</html>	 