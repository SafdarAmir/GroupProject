<?php
// Include necessary files (header, session, etc.)
include('header.php');
include('session.php');
include('navbar.php'); // Assuming you have a navigation bar

// Retrieve member details from the database based on the session user ID
$user_id = $_SESSION['member_id']; // Adjust this based on your session variable
$query = "SELECT * FROM member WHERE member_id = '$user_id'";
$result = mysqli_query($link, $query);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_assoc($result);
    // Display user profile information
    ?>
    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">
                    <h2>Your Profile</h2>
                    <table class="table">
                        <tr>
                            <td>Member ID:</td>
                            <td><?php echo $row['member_id']; ?></td>
                        </tr>
                        <tr>
                            <td>First Name:</td>
                            <td><?php echo $row['firstname']; ?></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><?php echo $row['lastname']; ?></td>
                        </tr>
                        <!-- Add more fields as needed -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    // Handle the case when the query fails
    echo "Error: " . mysqli_error($link);
}

// Include footer or other necessary files
include('footer.php');
?>
