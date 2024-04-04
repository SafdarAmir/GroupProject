<div class="span12">
    <div class="header">
        <div class="pull-left">
            <img class="stilogo" src="LMS/librarylogo1.jpg">
        </div>
    </div>

    <div class="alert alert-info">
        <strong>Hello!</strong>&nbsp;Welcome to UPTM Library System

        <div class="pull-right">
            <i class="icon-calendar icon-large"></i>
            <span id="currentDateTime">
                <?php
                // Set the correct timezone
                date_default_timezone_set('Asia/Kuala_Lumpur');

                // Display current date and time without seconds
                $now = new DateTime();
                echo $now->format('l, F d, Y H:i');
                ?>
            </span>
        </div>
    </div>
</div>

<script>
    // Update the time every minute
    setInterval(function() {
        var now = new Date();
        var dateTime = now.toLocaleString('en-US', {
            weekday: 'long',
            month: 'long',
            day: 'numeric',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
        document.getElementById('currentDateTime').innerText = dateTime;
    }, 60000); // 60000 milliseconds = 1 minute
</script>
