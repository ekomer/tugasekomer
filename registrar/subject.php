<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_fakultas.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_subject" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Tambah Fakultas</strong></a>
											</li>
										</ul>
										
										 
     <!-- Modal add user -->
	<?php include('modal_add_fakultas.php'); ?>
						
			</div>

			<div class="span10">
			
			 
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabel Perguruan Tinggi</strong>
                                </div>
                                <thead>
                                    <tr>
                                    	<th>Nama Universitas</th>
                                        <th>Kode Fakultas</th>
                                        <th>Nama Fakultas</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								
                                  <?php $user_query=mysql_query("select * from perguruan_tinggi");
                                  	while($row=mysql_fetch_array($user_query))
									{
										
										$id_universitas=$row['id_universitas']; 
										
										$course_query = mysql_query("select * from fakultas where id_universitas = '$id_universitas' ");
										while($row2=mysql_fetch_array($course_query))
										{	
											$i=0;	
											$id[$i]=$row2['kode_fakultas'];
											$id_=$row2['kode_fakultas'];
											?>
											 <tr class="del<?php echo $row2['kode_fakultas'] ?>">
		                                    
		                                    <td><?php echo $row['nama_universitas']; ?></td> 
		                                    <td><?php echo $row2['kode_fakultas']; ?></td>
		                                    <td><?php echo $row2['nama_fakultas']; ?></td> 
		                                    <td width="100">
		                                        <a  href="#delete_subject<?php echo $id[$i]; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
												<?php include('delete_fakultas_modal.php'); ?>
		                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id_; ?>" href="#edit<?php echo $id_; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		                                        
		                                    	<?php include('modal_edit_fakultas.php'); ?>
											</td>
											</tr>
										<?php
											$i++;
										}
										
										
										     
									
	                                    
										 
									} ?>
                           
                                </tbody>
                            </table>
							

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>