<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_jurusan.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_subject" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Tambah Jurusan</strong></a>
											</li>
										</ul>
										
										 
     <!-- Modal add user -->
	<?php include('modal_add_jurusan.php'); ?>
						
			</div>

			<div class="span10">
			
			 
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabel Jurusan</strong>
                                </div>
                                <thead>
                                    <tr>
                                    	<th>Nama Universitas</th>
                                        <th>Nama Fakultas</th>
                                        <th>Kode Jurusan</th>                                 
                                        <th>Nama Jurusan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								

                                	<?
                                		$query=mysql_query("select * from jurusan");
                                		while($row=mysql_fetch_array($query))
                                		{
                                			$id=$row['kode_jurusan'];
                                			$id_universitas=$row['id_universitas'];
                                			$query2=mysql_query("select * from perguruan_tinggi where id_universitas='$id_universitas'");
											$row2=mysql_fetch_array($query2);
											$nama_universitas=$row2['nama_universitas'];

											$kode_fakultas=$row['kode_fakultas'];
											$query3=mysql_query("select * from fakultas where kode_fakultas='$kode_fakultas'");
											$row3=mysql_fetch_array($query3);
											$nama_fakultas=$row3['nama_fakultas'];
                                			?>
                                			<tr class="del<?php echo $row2['kode_fakultas'] ?>">
		                                    
		                                    <td><?php echo $nama_universitas; ?></td> 
		                                    <td><?php echo $nama_fakultas; ?></td>
		                                    <td><?php echo $row['kode_jurusan']; ?></td> 
		                                    <td><?php echo $row['nama_jurusan']; ?></td> 
		                                    <td width="100">
		                                        <a  href="#delete_jurusan<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
												<?php include('delete_jurusan_modal.php'); ?>
		                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id_; ?>" href="#edit<?php echo $id_; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		                                        
		                                    	<?php include('modal_edit_jurusan.php'); ?>
											</td>
											</tr>
		                                    <?
                                		}
                                	?>

                                  
                           
                                </tbody>
                            </table>
							

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>