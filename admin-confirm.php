<?php
include ('header.php'); 
include ('dbConnect.php');

if (isset($_POST['submit']))
{
    $sql = 'INSERT INTO adventures (heading, tripDate, duration, summary) VALUES ("' . mysqli_real_escape_string($_POST['heading']) . '", "' . mysqli_real_escape_string($_POST['tripDate']) . '", "' . mysqli_real_escape_string($_POST['duration']) . '", "' . mysqli_real_escape_string($_POST['summary']) . '")';
    $result = mysqli_query($mysqli, $sql);

    mysqli_close($mysqli);
}
?>

<div>
    <h1>Admin - Confirm</h1>
    <p>Data has been added successfully to DB</p>
    <a href="all-adventures.php">View All Adventures</a>
</div>
<?php
include ('footer.php');
?>