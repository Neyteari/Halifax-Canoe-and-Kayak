<?php
include ('header.php'); 
include ('dbConnect.php');
?>

<div>
    <h1>Upcoming Adventures</h1>
    <hr/>
    <?php
    $sql = 'SELECT id, heading, tripDate, duration, summary FROM adventures';
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<h1>' . $row['heading'] . '<br/>Date: ' . $row['tripDate'] . '<br/>Duration: ' . $row['duration'] . '<br/><br/>Summary<br/>' . $row['summary'] . '<br/><br/>';
    }

    mysqli_close($mysqli);
    ?>
</div>
<?php
include ('footer.php');
?>