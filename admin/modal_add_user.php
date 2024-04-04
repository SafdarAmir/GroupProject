<?php
include('dbcon.php'); // Include the database connection details

if (isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);  // Original password
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $user_type = htmlspecialchars($_POST['user_type']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Create a prepared statement
    $stmt = mysqli_prepare($link, "INSERT INTO users (username, password, firstname, lastname, email, user_type) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $username, $hashed_password, $firstname, $lastname, $email, $user_type);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check for errors
    if(mysqli_stmt_errno($stmt)) {
        die(mysqli_stmt_error($stmt));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body">
        <div class="alert alert-info"><strong>Add User</strong></div>
        <form class="form-horizontal" method="post">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="username" placeholder="Username" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Firstname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="firstname" placeholder="Firstname" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Lastname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="lastname" placeholder="Lastname" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="email" placeholder="email" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Type:</label>
                <div class="controls">
                    <select name="user_type" required>
                        <option value=""></option>
                        <option value="admin">admin</option>
                        <option value="librarian">librarian</option>
                        <option value="member">member</option>
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
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
    </div>
</div>
