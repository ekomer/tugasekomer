<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post" action="edit_jurusan.php<?php echo '?id='.$id; ?>">
					<div class="control-group">
						<label class="control-label" for="type">Nama Perguruan Tinggi</label>
							<div class="controls">
							<select name="pt" id="pt" >

								
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
							
						<input type="text"  name="nama_fakultas"  required value="">
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
