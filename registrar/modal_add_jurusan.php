<html>
	<head>
			<script src="script.js" type="text/javascript"></script>
	</head>
	<body>
	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Tambah Jurusan</div>
	<form class="form-horizontal" method="post">
			
			<div class="control-group">
						<label class="control-label" for="type">Nama Perguruan Tinggi</label>
							<div class="controls">
							<select name="pt" id="pt" onChange="getfakultas()">
							<option value="">Pilih Perguruan Tinggi</option>
							<? $query=mysql_query("SELECT * FROM perguruan_tinggi");
								while($row=mysql_fetch_array($query))
								{	
							 ?>
							<option value="<?php echo $row['id_universitas'];?>"><?php echo $row['nama_universitas']; ?></option>
							
							<?}?>
							</select>
							</div>
			</div>

			<div class="control-group">
						<label class="control-label" for="type">Nama Fakultas</label>
							<div class="controls">
							<select name="fakultas" id="fakultas" required>
							
							<option value="">Pilih fakultas</option>
							</select>
							
							
							</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Nama Jurusan</label>
				<div class="controls">
				<input type="text"  name="nama_jurusan"  required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$kode_fakultas=$_POST['fakultas'];
	$pt=$_POST['pt'];
	$nama_jurusan=$_POST['nama_jurusan'];
		
$error_course=mysql_query("select * from jurusan where kode_fakultas='$kode_fakultas' AND id_universitas='$pt'")or die(mysql_error());
 $count=mysql_num_rows($error_course);

 if($count  != 1){
	mysql_query("insert into jurusan (id_universitas, kode_fakultas,  nama_jurusan) values('$pt','$kode_fakultas','$nama_jurusan')")or die(mysql_error());?>
	<script type="text/javascript">
                        alert('Berhasil Diinput');
           </script>
	<?}else{ ?>
	   <script type="text/javascript">
                        alert('jurusan di id_Universitas <?php echo $pt ?> Yang Anda Masukan Sudah Tersedia');
           </script>
	<?php
	} }
	?>
</body>
</html>