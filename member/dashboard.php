<?php 
include('header.php'); 
include('session.php'); 
include('navbar_dashboard.php'); 

// Function to sanitize input data
function sanitize_input($data) {
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
                
                <?php include('slider.php'); ?>
                
            </div>        
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<?php 
// Sanitize and validate input if necessary
// Example:
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $input_value = sanitize_input($_POST['input_name']);
//     // Validate input if necessary
//     if (empty($input_value)) {
//         // Handle empty input
//     } else {
//         // Process the input
//     }
// }
?>
