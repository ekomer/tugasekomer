	<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>GWA:</td> 
								   <td>
								   						<?php
							
                            $result = mysql_query("SELECT sum(gen_ave) FROM grade  where student_id = '$get_id' and school_year = '$school_year' and semester = '$semester'") or die(mysql_error());
                            
							
							
							
							$test_count=mysql_query("select * from grade where gen_ave <> '' and student_id = '$get_id' and school_year = '$school_year' and semester = '$semester' ")or die(mysql_error());
							$count_gen = mysql_num_rows($test_count);
							
							while ($rows = mysql_fetch_array($result)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(gen_ave)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
								   
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>