<div id="edit<?php echo htmlspecialchars($id); ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body">
        <div class="alert alert-info"><strong>Edit User</strong></div>
        <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="editUserForm">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="hidden" id="inputEmail" name="id" value="<?php echo htmlspecialchars($row['user_id']); ?>" required>
                    <input type="text" id="inputEmail" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" id="inputPassword" value="" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Firstname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="firstname" value="<?php echo htmlspecialchars($row['firstname']); ?>" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Lastname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="lastname" value="<?php echo htmlspecialchars($row['lastname']); ?>" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="email" id="emailInput" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Type:</label>
                <div class="controls">
                    <select name="user_type" required>
                        <option value=""></option>
                        <option value="admin" <?php echo ($row['user_type'] == 'admin') ? 'selected' : ''; ?>>admin</option>
                        <option value="librarian" <?php echo ($row['user_type'] == 'librarian') ? 'selected' : ''; ?>>librarian</option>
                        <option value="member" <?php echo ($row['user_type'] == 'member') ? 'selected' : ''; ?>>member</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])){
    $user_id = htmlspecialchars($_POST['id']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $user_type = htmlspecialchars($_POST['user_type']);

    $username = mysqli_real_escape_string($link, $username);
    $password_hash = password_hash($password, PASSWORD_DEFAULT); // Securely hash the password
    $firstname = mysqli_real_escape_string($link, $firstname);
    $lastname = mysqli_real_escape_string($link, $lastname);
    $email = mysqli_real_escape_string($link, $email);
    $user_type = mysqli_real_escape_string($link, $user_type);

    $query = "UPDATE users SET username='$username', password='$password_hash', firstname='$firstname', lastname='$lastname', email='$email', user_type='$user_type' WHERE user_id='$user_id'";
    mysqli_query($link, $query) or die(mysqli_error($link)); 
    ?>
    <script>
        window.location="users.php";
    </script>
    <?php
}
?>
