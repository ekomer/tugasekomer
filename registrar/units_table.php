		<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = mysql_query("SELECT sum(unit) FROM grade  where student_id = '$get_id' and school_year = '$school_year' and semester = '$term'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>