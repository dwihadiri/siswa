<html>  
 <head><title>Form Input Siswa</title></head>  
 <body>  
  <form name="formSiswa" id="formSiswa" method="post" action="save_siswa.php">
  
   <dl>  
     <dt>NIS</dt>  
     <dd><input name="nis" id="nis" type="text"/></dd>  
     <dt>Nama</dt>  
     <dd><input type="text" name="nama" id="nama"/></dd>  
     <dt>Jenis Kelamin</dt>
	 <dd><input type="text" name="jenis_kelamin" id="jenis_kelamin"/></dd>
     <dt>Tanggal Lahir</dt>  
     <dd>  
       <input type="text" name="tanggal" id="tanggal" size="5"/>  
       <input type="text" name="bulan" id="bulan" size="5"/>  
       <input type="text" name="tahun" id="tahun" size="5"/> dd-mm-yyyy  
     </dd>  
     <dt></dt>  
     <dd><input type="submit" name="save" value="save" /></dd>  
   </dl>  
  </form>  
 </body>  
 </html>  