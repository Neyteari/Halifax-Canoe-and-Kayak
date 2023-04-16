<?php
include('header.php');

if (isset($_POST['submit']))
{
    if ($_POST['type'] == 'newAccount')
    {
        echo 'Making a new account for ' . $_POST['email'];
    }
    elseif ($_POST['type'] == 'lostPassword')
    {
        echo 'Retrieving lost password for ' . $_POST['email'];
    }
}
else
{
?>
<div>
    <form action="send-email.php" method="POST">
    <p>Type: <select name="type">
        <option value="newAccount">New Account</option>
        <option value="lostPassword">Lost Password</option>
    </select></p>
    <p>Email Address: <input type="text" name="email" /></p>
    <input type="submit" name="submit" value="Submit" />
    </p>
    </form>
</div>
<?php
}
include('footer.php');
?>