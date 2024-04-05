<?php 
include('header.php'); 
include('session.php'); 
include('navbar_books.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST['title']);
    $author = test_input($_POST['author']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

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
                    <p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Books</a></p>

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
                            <th class="action">Action</th>      
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $user_query = mysqli_prepare($link, "SELECT * FROM book WHERE status != 'Archive' AND book_title LIKE ? OR status != 'Archive' AND author LIKE ?");
                        mysqli_stmt_bind_param($user_query, "ss", $title_query, $author_query);
                        
                        $title_query = "%$title%";
                        $author_query = "%$author%";
                        
                        mysqli_stmt_execute($user_query);
                        $result = mysqli_stmt_get_result($user_query);
                        
                        while($row = mysqli_fetch_array($result)) {
                            $id = htmlspecialchars($row['book_id']);  
                            $cat_id = htmlspecialchars($row['category_id']);
                            $book_copies = htmlspecialchars($row['book_copies']);
                            
                            $borrow_details = mysqli_query($link, "SELECT * FROM borrowdetails WHERE book_id = '$id' AND borrow_status = 'pending'");
                            $row11 = mysqli_fetch_array($borrow_details);
                            $count = mysqli_num_rows($borrow_details);
                            
                            $total = $book_copies - $count; 
                            
                            $cat_query = mysqli_query($link, "SELECT * FROM category WHERE category_id = '$cat_id'");
                            $cat_row = mysqli_fetch_array($cat_query);
                        ?>
                        <tr class="del<?php echo $id ?>">
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
                            <?php include('toolttip_edit_delete.php'); ?>
                            <td class="action">
                                <a rel="tooltip" title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                <?php include('delete_book_modal.php'); ?>
                                <a rel="tooltip" title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>      
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
