<div id="delete_user<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body">
        <div class="alert alert-danger">Are you sure you want to delete this Data?</div>
    </div>
    <div class="modal-footer">
        <?php if($row['user_type'] != 'admin') { ?>
            <button class="btn btn-danger delete_button" id="<?php echo $id; ?>"><i class="icon-check"></i>&nbsp;Yes</button>
        <?php } else { ?>
            <a class="btn btn-danger" href="error_input.php"><i class="icon-check"></i>&nbsp;Yes</a>
        <?php } ?>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.delete_button').click(function() {
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
