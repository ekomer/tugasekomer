<html>
	<head>
			<script src="script2.js" type="text/javascript"></script>
	</head>
	<body>
	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post" action="edit_fakultas.php<?php echo '?id='.$id; ?>">
					<div class="control-group">
						<label class="control-label" for="inputPassword">Perguruan Tinggi</label>
						<div class="controls">
							<select name="pt" id="pt">
									
									<?php 
									$select_id_pt=mysql_query("select * from jurusan where kode_jurusan='$id'");
									$row2=mysql_fetch_array($select_id_pt);
									$id_universitas=$row2['id_universitas'];
									



									$course_query_ = mysql_query("select * from perguruan_tinggi") or die(mysql_error());
									while($course_row_ = mysql_fetch_array($course_query_)){
									?>
									<option value="<?php echo $course_row_['id_universitas']; ?>"  <?php if($course_row_['id_universitas'] == $id_universitas): ?> selected="selected"<?php endif; ?>>
										<?php echo $course_row_['nama_universitas']; ?></option>
									<?php  } ?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="type">Nama Fakultas</label>
							<div class="controls">
							<select name="fakultas" id="fakultas" required>
							
						
							
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
	</body>
	</html>
	