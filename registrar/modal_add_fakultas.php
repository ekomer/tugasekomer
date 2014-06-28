	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Tambah Universitas</div>
	<form class="form-horizontal" method="post">
			
			<div class="control-group">
						<label class="control-label" for="type">Nama Perguruan Tinggi</label>
							<div class="controls">
							<select name="pt" required>
							
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
				<label class="control-label" for="inputEmail">Nama Fakultas</label>
				<div class="controls">
				<input type="text"  name="nama_fakultas"  required>
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
	$nama_fakultas=$_POST['nama_fakultas'];
	$pt=$_POST['pt'];

		
$error_course=mysql_query("select * from fakultas where nama_fakultas='$nama_fakultas' AND id_universitas='$pt'")or die(mysql_error());
 $count=mysql_num_rows($error_course);

 if($count  != 1){
	mysql_query("insert into fakultas (id_universitas, nama_fakultas) values('$pt','$nama_fakultas')")or die(mysql_error());
	}else{ ?>
	   <script type="text/javascript">
                        alert('Fakultas di id_Universitas <?php echo $pt ?> Yang Anda Masukan Sudah Tersedia');
           </script>
	<?php
	} }
	?>