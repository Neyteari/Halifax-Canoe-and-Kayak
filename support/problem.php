<?php
include('header.php');

if (isset($_POST['submit']))
{
    $role = $_POST['role'];

    if ($role == 'Admin')
    {
        //code

    }
    elseif ($role == 'Manager')
    {

    }
    elseif ($role == 'CEO')
    {

    }
    else
    {
        echo 'Please go <a href="index.php">here</a> to re-submit the form';
    }

    echo '<h1>Hello ' . $role . '</h1><hr/>';
    echo '<h2>Here are your options:</h2>';
}
else 
{
    echo 'Please go <a href="index.php">here</a> to submit the form';
}

include('footer.php');
?>