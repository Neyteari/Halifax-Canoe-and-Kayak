<?php
include ('header.php'); 
?>

<div>
    <form action="problem.php" method="POST">
    <p>Title: <select name="title">
        <option value="Mr">Mr.</option>
        <option value="Ms">Ms.</option>
        <option value="Mrs">Mrs.</option>
    </select></p>
    <p>First Name: <input type="text" name="first" /></p>
    <p>Last Name: <input type="text" name="last" /></p>
    <p>Role: <select name="role">
        <option value="Admin">Admin</option>
        <option value="Manager">Manager</option>
        <option value="CEO">CEO</option>
    </select>
    <input type="submit" name="submit" value="Submit" />
    </p>
    </form>
</div>
<?php
include ('footer.php');
?>