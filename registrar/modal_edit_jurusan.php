<div id="edit<?php echo $id_; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post" action="edit_fakultas.php<?php echo '?id='.$id_; ?>">
					<div class="control-group">
						<label class="control-label" for="inputPassword">Perguruan Tinggi</label>
						<div class="controls">
							<select name="pt" required>
									
									<?php 
									$course_query_ = mysql_query("select * from perguruan_tinggi") or die(mysql_error());
									while($course_row_ = mysql_fetch_array($course_query_)){
									?>
									<option value="<?php echo $course_row_['id_universitas']; ?>"><?php echo $course_row_['nama_universitas']; ?></option>
									<?php  } ?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Nama Fakultas</label>
						<div class="controls">
							
						<input type="text"  name="nama_fakultas"  required value="<?php echo $row2['nama_fakultas']; ?>">
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
	
	