<?php 
include('dbcon.php');

if (isset($_POST['submit'])) {
    // Input validation
    if (empty($_POST['book_title']) || empty($_POST['category_id']) || empty($_POST['author']) || empty($_POST['book_copies']) || empty($_POST['book_pub']) || empty($_POST['publisher_name']) || empty($_POST['isbn']) || empty($_POST['copyright_year']) || empty($_POST['status'])) {
        header("Location: error_books.php");
        exit;
    }

    $book_title = $_POST['book_title'];
    $category_id = $_POST['category_id'];
    $author = $_POST['author'];
    $book_copies = $_POST['book_copies'];
    $book_pub = $_POST['book_pub'];
    $publisher_name = $_POST['publisher_name'];
    $isbn = $_POST['isbn'];
    $copyright_year = $_POST['copyright_year'];
    $status = $_POST['status'];

    // Character length validation
    if (strlen($book_title) > 255 || strlen($author) > 255 || strlen($book_pub) > 255 || strlen($publisher_name) > 255 || strlen($isbn) > 50 || strlen($status) > 50) {
        header("Location: error_books.php");
        exit;
    }

    // Insert data into the database
    mysqli_query($link, "INSERT INTO book (book_title, category_id, author, book_copies, book_pub, publisher_name, isbn, copyright_year, date_added, status)
                         VALUES ('$book_title', '$category_id', '$author', '$book_copies', '$book_pub', '$publisher_name', '$isbn', '$copyright_year', NOW(), '$status')")
    or die(mysqli_error($link));

    header('location:books.php');
}
?>
