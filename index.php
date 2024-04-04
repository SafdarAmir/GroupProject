<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">
            <?php include('head.php'); ?>
            <div class="span2">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="span10">
                <?php include('slider.php'); ?>
            </div>
            <div class="span2">
                <h4></h4>
            </div>
            <div class="span10">
                <?php include('thumbnail.php'); ?>
                <div class="text_content">
                    <div class="abc">
                        <!-- text content -->
                        <h4><?php echo htmlspecialchars("Purpose"); ?></h4>
                        <hr>
                        <p>
                            <?php echo htmlspecialchars("Library Services is responsible for managing information resources for learning, teaching and research and providing support on their use. The core collection covers materials that meet the taught courses offered by the university college with generous allocations in developing resources required for research purposes. The library is proactive in developing a wide range of electronic resources and in promoting and guiding the use of information resources, including: subject-based reference enquiry services, internet gateway services, and subject-focused academic support services."); ?>
                        </p>
                        <hr>
                        <h4><?php echo htmlspecialchars(""); ?></h4>
                        <hr>
                        <p>
                            <?php echo htmlspecialchars(""); ?>
                        </p>
                        <hr>
                    </div>
                </div>
                <!-- end content -->
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>