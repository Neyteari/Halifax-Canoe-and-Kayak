<?php
$body = '';
if (isset($_POST['submit']))
{
    $role = $_POST['role'];

    $body .= '<h1>Hello ' . $role . '</h1><hr/>';
    $body .= '<h2>Here are your options:</h2>';

    if ($role == 'Admin')
    {
        $_SESSION['role'] = 'Admin';
        $body .= '<a href="new-account.php">New Account</a><br/>'; 
    }
    elseif ($role == 'Manager')
    {
        $_SESSION['role'] = 'Manager';
        $body .= '<a href="lost-password.php">Lost Password</a><br/>';
    }
    elseif ($role == 'CEO')
    {
        $_SESSION['role'] = 'CEO';
        $body .= '<a href="need-help.php">Phone Number</a><br/>';
    }

    $body .= '<a href="isnt-working.php">My Computer isn\'t working</a>';
}
else 
{
    $body .= 'Please go <a href="index.php">here</a> to submit the form';
}

include('header.php');

echo $body;

include('footer.php');
?>