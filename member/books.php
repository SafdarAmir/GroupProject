<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                </div>
				<ul class="nav nav-pills">
					<li class="active"><a href="books.php">All</a></li>
					<li><a href="new_books.php">New Books</a></li>
					<li><a href="old_books.php">Old Books</a></li>
					<li><a href="lost.php">Lost Books</a></li>
					<li><a href="damage.php">Damage Books</a></li>
					<li><a href="sub_rep.php">Subject for Replacement</a></li>
				</ul>
				<center class="title">
					<h1>Books List</h1>
				</center>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
					<div class="pull-right">
						<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
					</div>
					<thead>
                        <tr>
                            <th>Acc No.</th>                                 
                            <th>Book Title</th>                                 
                            <th>Category</th>
                            <th>Author</th>
                            <th class="action">copies</th>
                            <th>Book Pub</th>
                            <th>Publisher Name</th>
                            <th>ISBN</th>
                            <th>Copyright Year</th>
                            <th>Date Added</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $user_query = mysqli_query($link, "SELECT * FROM book WHERE status != 'Archive'") or die(mysqli_error($link));
                            while($row = mysqli_fetch_array($user_query)) {
                                $id = htmlspecialchars($row['book_id']);  
                                $cat_id = htmlspecialchars($row['category_id']);
                                $book_copies = htmlspecialchars($row['book_copies']);
                                
                                $borrow_details = mysqli_query($link, "SELECT * FROM borrowdetails WHERE book_id = '$id' AND borrow_status = 'pending'");
                                $row11 = mysqli_fetch_array($borrow_details);
                                $count = htmlspecialchars(mysqli_num_rows($borrow_details));
                                
                                $total =  $book_copies  -  $count; 
                                
                                $cat_query = mysqli_query($link, "SELECT * FROM category WHERE category_id = '$cat_id'") or die(mysqli_error($link));
                                $cat_row = mysqli_fetch_array($cat_query);
                        ?>
                            <tr class="del<?php echo $id; ?>">
                                <td><?php echo $id; ?></td>
                                <td><?php echo htmlspecialchars($row['book_title']); ?></td>
                                <td><?php echo htmlspecialchars($cat_row['classname']); ?></td>
                                <td><?php echo htmlspecialchars($row['author']); ?></td> 
                                <td class="action"><?php echo $total; ?></td>
                                <td><?php echo htmlspecialchars($row['book_pub']); ?></td>
                                <td><?php echo htmlspecialchars($row['publisher_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['isbn']); ?></td>
                                <td><?php echo htmlspecialchars($row['copyright_year']); ?></td>      
                                <td><?php echo htmlspecialchars($row['date_added']); ?></td>
                                <td><?php echo htmlspecialchars($row['status']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
