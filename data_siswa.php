    <?php  
     $conn = mysql_connect("localhost", "root", "");  
     mysql_select_db("absensi_siswa");  
       
     if($_GET['action']  == 'delete'){  
     mysql_query("delete from siswa where nim='".mysql_real_escape_string($_GET['id'])."'");  
     }  
       
     $query = "select * from siswa order by nama";  
     $rowSet = mysql_query($query);  
     echo '<a href="index.php">Input Siswa Baru</a>';  
     echo '<table border="1">';  
     echo '<tr>';  
     echo '<td>NIM</td>';  
     echo '<td>Nama</td>';  
     echo '<td>Jurusan</td>';  
     echo '<td>Kelas</td>';  
     echo '<td>Mata Kuliah</td>';
	 echo '<td>Nama Dosen</td>';
     echo '</td>';  
     while($row = mysql_fetch_array($rowSet)){  
     echo '<tr>';  
     echo '<td>'.$row['nim'].'</td>';  
     echo '<td>'.$row['nama'].'</td>';  
     echo '<td>'.$row['jurusan'].'</td>';  
     echo '<td>'.$row['kelas'].'</td>';
	 echo '<td>'.$row['matakuliah'].'</td>';
	 echo '<td>'.$row['namadosen'].'</td>';	 
     echo '<td>';  
     echo '<a href="data_siswa.php?id='.$row['nim'].'&action=delete">Delete</a>';  
     echo ' | <a href="form_edit_siswa.php?id='.$row['nim'].'&action=update">Edit</a>';  
     echo '</td>';  
     echo '</tr>';  
     }  
     echo '</table>';  
     ?>  