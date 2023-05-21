<?php
include ('header.php'); 
?>

<div>
    <h1>Admin - Add Adventure</h1>
    <hr/>
    <p>Input details about the trip</p>
    <form action="admin-confirm.php" method="POST">
    <p>Heading: <input type="text" name="heading" /></p>
    <p>Trip Date: <input type="text" name="tripDate" placeholder="YYYY-MM-DD" /></p>
    <p>Duration: <input type="text" name="duration" /></p>
    <p>Summary: <input type="text" name="summary" /></p>
    <input type="submit" name="submit" value="Submit" />
    </p>
    </form>
</div>
<?php
include ('footer.php');
?>