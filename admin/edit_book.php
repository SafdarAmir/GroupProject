<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php 
$get_id = htmlspecialchars($_GET['id']); 
$query=mysqli_query($link,"select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$get_id'")or die(mysqli_error($link));
$row=mysqli_fetch_array($query);
$category_id = htmlspecialchars($row['category_id']);
?>
<div class="container">
	<div class="margin-top">
		<div class="row">	
			<div class="span12">	
				<div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Books</div>
				<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
				<div class="addstudent">
					<div class="details">Please Enter Details Below</div>	
					<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
						
						<div class="control-group">
							<label class="control-label" for="inputEmail">Book_title:</label>
							<div class="controls">
								<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo htmlspecialchars($row['book_title']); ?>" placeholder="book_title" required>
								<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id; ?>" placeholder="book_title" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Category:</label>
							<div class="controls">
								<select name="category_id">
									<option value="<?php echo $category_id; ?>"><?php echo htmlspecialchars($row['classname']); ?></option>
									<?php 
									$query1 = mysqli_query($link,"select * from category where category_id != '$category_id'")or die(mysqli_error($link));
									while($row1 = mysqli_fetch_array($query1)){
									?>
									<option value="<?php echo htmlspecialchars($row1['category_id']); ?>"><?php echo htmlspecialchars($row1['classname']); ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Author:</label>
							<div class="controls">
								<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" placeholder="author" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Book_copies:</label>
							<div class="controls">
								<input class="span1" type="number" id="inputPassword" name="book_copies" value="<?php echo htmlspecialchars($row['book_copies']); ?>" placeholder="book_copies" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Book_pub:</label>
							<div class="controls">
								<input type="text" class="span4"  id="inputPassword" name="book_pub" value="<?php echo htmlspecialchars($row['book_pub']); ?>" placeholder="book_pub" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Publisher_name:</label>
							<div class="controls">
								<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo htmlspecialchars($row['publisher_name']); ?>" placeholder="publisher_name" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Isbn:</label>
							<div class="controls">
								<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo htmlspecialchars($row['isbn']); ?>" placeholder="isbn" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Copyright_year:</label>
							<div class="controls">
								<input type="number" id="inputPassword" name="copyright_year" value="<?php echo htmlspecialchars($row['copyright_year']); ?>" placeholder="copyright_year" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputPassword">Status:</label>
							<div class="controls">
								<select name="status">
									<option><?php echo htmlspecialchars($row['status']); ?></option>
									<option>New</option>
									<option>Old</option>
									<option>Lost</option>
									<option>Damage</option>
									<option>Subject for Replacement</option>
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
								<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
							</div>
						</div>
					</form>				
				</div>		
			</div>		
		</div>
	</div>
</div>
<?php include('footer.php') ?>
