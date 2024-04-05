<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php');

// Function to prevent SQL Injection
function mysqliPrep($value) {
    global $link;
    return mysqli_real_escape_string($link, $value);
}
?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Books</div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data" onsubmit="return validateForm()">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Book_title:</label>
			<div class="controls">
			<input type="text" class="span4" id="book_title" name="book_title"  placeholder="Book Title" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Category</label>
			<div class="controls">
			<select name="category_id" id="category_id" required>
			<option value=""></option>
			<?php
			$cat_query = mysqli_query($link,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Author:</label>
			<div class="controls">
			<input type="text"  class="span4" id="author" name="author"  placeholder="Author" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputPassword">Book Copies:</label>
			<div class="controls">
			<input type="number" class="span1" id="book_copies" name="book_copies"  placeholder="Book Copies" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Book Publication:</label>
			<div class="controls">
			<input type="text"  class="span4" id="book_pub" name="book_pub"  placeholder="Book Publication" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Publisher Name:</label>
			<div class="controls">
			<input type="text"  class="span4" id="publisher_name" name="publisher_name"  placeholder="Publisher Name" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="isbn" name="isbn"  placeholder="ISBN" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Copyright Year:</label>
			<div class="controls">
			<input type="number" id="copyright_year" name="copyright_year"  placeholder="Copyright Year" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" id="status" required>
				<option value=""></option>
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
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>

<script>
function validateForm() {
    var book_title = document.getElementById("book_title").value;
    var category_id = document.getElementById("category_id").value;
    var author = document.getElementById("author").value;
    var book_copies = document.getElementById("book_copies").value;
    var book_pub = document.getElementById("book_pub").value;
    var publisher_name = document.getElementById("publisher_name").value;
    var isbn = document.getElementById("isbn").value;
    var copyright_year = document.getElementById("copyright_year").value;
    var status = document.getElementById("status").value;

    if (book_title == "" || category_id == "" || author == "" || book_copies == "" || book_pub == "" || publisher_name == "" || isbn == "" || copyright_year == "" || status == "") {
        alert("All fields must be filled out");
        return false;
    }

    if (book_copies < 0) {
        alert("Book Copies must be a positive number");
        return false;
    }

    if (copyright_year <  + 1000 || copyright_year >  + 9999){
        alert("Please enter a valid copyright year");
        return false;
    }

    return true;
}
</script>

<?php include('footer.php') ?>
