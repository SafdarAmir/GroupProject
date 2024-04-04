<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_user.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">	
            <div class="span2">			     
                <ul class="nav nav-tabs nav-stacked">
                    <li>
                        <a href="#add_user" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
                    </li>
                </ul>
                <!-- Modal add user -->
                <?php include('modal_add_user.php'); ?>
            </div>
            <div class="span10">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                    </div>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>                                 
                            <th>Firstname</th>                                 
                            <th>Lastname</th>
                            <th>Email</th>                                 
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $user_query = mysqli_query($link, "SELECT * FROM users") or die(mysqli_error($link));
                        while($row = mysqli_fetch_array($user_query)){
                            $id = $row['user_id']; 
                            $username = htmlspecialchars($row['username']);
                            $firstname = htmlspecialchars($row['firstname']);
                            $lastname = htmlspecialchars($row['lastname']);
                            $email = htmlspecialchars($row['email']);
                            $user_type = htmlspecialchars($row['user_type']);
                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $username; ?></td> 
                            <td>*******</td> <!-- Replaced with asterisks for password -->
                            <td><?php echo $firstname; ?></td> 
                            <td><?php echo $lastname; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $user_type; ?></td>
                            <td width="100">
                                <a rel="tooltip" title="Delete" id="<?php echo $id; ?>" href="#delete_user<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                <?php include('delete_user_modal.php'); ?>
                                <a rel="tooltip" title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                <?php include('modal_edit_user.php'); ?>
                            </td>
                            <?php include('toolttip_edit_delete.php'); ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.btn-danger').click(function() {
                            var id = $(this).attr("id");
                            if (confirm("Are you sure you want to delete this Data?")) {
                                $.ajax({
                                    type: "POST",
                                    url: "delete_user.php",
                                    data: ({ id: id }),
                                    cache: false,
                                    success: function(html) {
                                        $(".del" + id).fadeOut('slow');
                                    }
                                });
                            } else {
                                return false;
                            }
                        });
                    });
                </script>
            </div>		
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
