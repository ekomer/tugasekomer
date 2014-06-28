	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Perguruan Tinggi</div>
	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Id Perguruan Tinggi</label>
						<div class="controls">
						<input type="hidden"  name="id universitas"  value="<?php echo $row['id_universitas']; ?>">
						<input type="text"  name="id_universitas" placeholder="Code" required value="<?php echo $row['id_universitas']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Nama Perguruan Tinggi</label>
						<div class="controls">
						<input type="text" name="nama_universitas"  placeholder="Couse Title" required value="<?php echo $row['nama_universitas']; ?>">
						</div>
					</div>
					<!--adding optional for swasta or negri-->	
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
						<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
						</div>
					</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$id_universitas=$_POST['id_universitas'];
	$nama_universitas=$_POST['nama_universitas'];
	$Tipe=$_POST['type'];

	mysql_query("update perguruan_tinggi set id_universitas='$id_universitas', nama_universitas='$nama_universitas', jenis_universitas='$Tipe' where id_universitas='$id_universitas'")or die(mysql_error()); ?>
	<script>
	window.location="course.php";
	</script>
	<?php
	}
	?>