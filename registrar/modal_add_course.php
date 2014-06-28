	<div id="add_course" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Tambah Universitas</div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Nama Perguruan Tinggi</label>
				<div class="controls">
				<input type="text"  name="nama_universitas"  required>
				</div>
			</div>
			<div class="control-group">
						<label class="control-label" for="type">Tipe Perguruan Tinggi</label>
							<div class="controls">
							<select name="type" required>
							<option></option>
							<option>Negri</option>
							<option>Swasta</option>
							
							</select>
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
	$nama_universitas=$_POST['nama_universitas'];
	$tipe_universitas=$_POST['type'];

		
$error_course=mysql_query("select * from perguruan_tinggi where nama_universitas='$nama_universitas'")or die(mysql_error());
 $count=mysql_num_rows($error_course);

 if($count  != 1){
	mysql_query("insert into perguruan_tinggi (nama_universitas,jenis_universitas) values('$nama_universitas','$tipe_universitas')")or die(mysql_error());
	}else{ ?>
	   <script type="text/javascript">
                        alert('Universitas Yang Anda Masukan Sudah Tersedia');
           </script>
	<?php
	} }
	?>