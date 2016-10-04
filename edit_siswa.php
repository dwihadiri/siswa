    <?php  
    $nim = $_POST['nim'];  
    $nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$matakuliah = $_POST['matakuliah'];
    $namadosen = $_POST['namadosen'];  
    //koneksi database  
    $conn = mysql_connect("localhost","root","");  
    mysql_select_db("absensi_siswa");  
    $query = "update siswa set nama='$nama', jurusan='$jurusan', kelas='$kelas', matakuliah='$matakuliah', namadosen='$namadosen' where nim='$nim'";  
    $hasil = mysql_query($query);  
    if($hasil){  
     echo "Data siswa telah disimpan";  
    }else{  
     echo "Error! gagal menyimpan data siswa:".mysql_error();  
    }  
    ?>  

<A HREF="data_siswa.php? "> Klik di sini </A> untuk melihat daftar siswa.