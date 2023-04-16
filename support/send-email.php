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
include('footer.php');
?>