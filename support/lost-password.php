<?php
include ('header.php'); 
?>

<div>
    <form action="send-email.php" method="POST">
    <input type="hidden" name="type" value="lostPassword" />
    <p>Email: <input type="text" name="email" /></p>
    <input type="submit" name="submit" value="Submit" />
    </p>
    </form>
</div>
<?php
include ('footer.php');
?>