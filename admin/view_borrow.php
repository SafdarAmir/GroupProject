<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Borrowed Books</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Book title</th>                                 
                                        <th>Borrower</th>                                 
                                        <th>Year Level</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Due Date</th>                                
                                        <th>Date Returned</th>
										<th>Borrow Status</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
								  $user_query = mysqli_query($link, "SELECT * FROM borrow
																	LEFT JOIN member ON borrow.member_id = member.member_id
																	LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
																	LEFT JOIN book ON borrowdetails.book_id = book.book_id 
																	ORDER BY borrow.borrow_id DESC") or die(mysqli_error($link));
									while($row = mysqli_fetch_array($user_query)){
										$id = htmlspecialchars($row['borrow_id']);
										$book_id = htmlspecialchars($row['book_id']);
										$borrow_details_id = htmlspecialchars($row['borrow_details_id']);
										$book_title = htmlspecialchars($row['book_title']);
										$borrower = htmlspecialchars($row['firstname']." ".$row['lastname']);
										$year_level = htmlspecialchars($row['year_level']);
										$date_borrow = htmlspecialchars($row['date_borrow']);
										$due_date = htmlspecialchars($row['due_date']);
										$date_return = htmlspecialchars($row['date_return']);
										$borrow_status = htmlspecialchars($row['borrow_status']);
									?>
									<tr class="del<?php echo $id ?>">
										<td><?php echo $book_title; ?></td>
										<td><?php echo $borrower; ?></td>
										<td><?php echo $year_level; ?></td>
										<td><?php echo $date_borrow; ?></td> 
										<td><?php echo $due_date; ?></td>
										<td><?php echo $date_return; ?></td>
										<td><?php echo $borrow_status; ?></td>
										<td>
											<a rel="tooltip" title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal" class="btn btn-success">
												<i class="icon-check icon-large"></i>Return
											</a>
											<?php include('modal_return.php'); ?>
										</td>
									</tr>
									<?php  
									}  
									?>
                                </tbody>
                            </table>
			</div>		
			<script>		
			$(".uniform_on").change(function(){
				var max = 3;
				if($(".uniform_on:checked").length == max){
					$(".uniform_on").attr('disabled', 'disabled');
					alert('3 Books are allowed per borrow');
					$(".uniform_on:checked").removeAttr('disabled');
				}else{
					$(".uniform_on").removeAttr('disabled');
				}
			});
			</script>		
			</div>
		</div>
    </div>
<?php include('footer.php'); ?>	
