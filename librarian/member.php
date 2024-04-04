<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
<?php
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

$link = mysqli_connect("localhost", "root", "mysql", "eb_lms");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<div class="container">
    <div class="margin-top">
        <div class="row">
            <div class="span12">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
                    <p><a href="add_member.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Member</a></p>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Type</th>
                            <th>Year level</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $user_query = mysqli_query($link, "SELECT * FROM member") or die(mysqli_error($link));
                        while ($row = mysqli_fetch_array($user_query)) {
                            $id = sanitize($row['member_id']);
                            $firstname = sanitize($row['firstname']);
                            $lastname = sanitize($row['lastname']);
                            $gender = sanitize($row['gender']);
                            $address = sanitize($row['address']);
                            $contact = sanitize($row['contact']);
                            $type = sanitize($row['type']);
                            $year_level = sanitize($row['year_level']);
                            $status = sanitize($row['status']);
                            $email = sanitize($row['email']);
                            $username_mem = sanitize($row['username_mem']);
                            $pass_mem = '********'; // Display password as asterisks

                        ?>
                            <tr class="del<?php echo $id ?>">
                                <td><?php echo $firstname . " " . $lastname; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $contact; ?></td>
                                <td><?php echo $type; ?></td>
                                <td><?php echo $year_level; ?></td>
                                <td><?php echo $status; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $username_mem; ?></td>
                                <td><?php echo $pass_mem; ?></td>
                                <?php include('toolttip_edit_delete.php'); ?>
                                <td width="100">
                                    <a rel="tooltip" title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                    <?php include('delete_student_modal.php'); ?>
                                    <a rel="tooltip" title="Edit" id="e<?php echo $id; ?>" href="edit_member.php?id=<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                </td>
                            </tr>
                        <?php  
                        }  
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
