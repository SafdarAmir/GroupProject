<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
                                </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Name</th>                                 
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Type</th>
                                        <th>Year level</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php  
                                    $user_query = mysqli_query($link, "SELECT * FROM member") or die(mysqli_error($link));
                                    while($row = mysqli_fetch_array($user_query)) {
                                        $id = htmlspecialchars($row['member_id']);
                                  ?>
                                    <tr class="del<?php echo $id; ?>">
                                        <td><?php echo htmlspecialchars($row['firstname'] . " " . $row['lastname']); ?></td>
                                        <td><?php echo htmlspecialchars($row['gender']); ?></td> 
                                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                                        <td><?php echo htmlspecialchars($row['contact']); ?></td>
                                        <td><?php echo htmlspecialchars($row['type']); ?></td> 
                                        <td><?php echo htmlspecialchars($row['year_level']); ?></td> 
                                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    </tr>
                                  <?php }  ?>
                                </tbody>
                            </table>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php'); ?>
