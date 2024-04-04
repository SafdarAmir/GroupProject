<?php
include('dbcon.php');

$id = $_POST['selector'];
$member_id = $_POST['member_id'];
$due_date = $_POST['due_date'];

if ($id == '') {
    header("location: borrow.php");
} else {
    $stmt = mysqli_prepare($link, "INSERT INTO borrow (member_id, date_borrow, due_date) VALUES (?, NOW(), ?)");
    mysqli_stmt_bind_param($stmt, "is", $member_id, $due_date);
    mysqli_stmt_execute($stmt);
    $borrow_id = mysqli_insert_id($link);

    $stmt2 = mysqli_prepare($link, "INSERT INTO borrowdetails (book_id, borrow_id, borrow_status) VALUES (?, ?, 'pending')");
    mysqli_stmt_bind_param($stmt2, "ii", $book_id, $borrow_id);

    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        $book_id = $id[$i];
        mysqli_stmt_execute($stmt2);
    }
    header("location: borrow.php");
}
?>
