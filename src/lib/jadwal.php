<?php
include 'kon.php';
$sqljad="SELECT * FROM jadwal";
$resultjad=mysqli_query($con,$sqljad);
$rowjad=mysqli_fetch_array($resultjad);
echo '<img style="width:100%;" src="data/images/'.$rowjad["link"].'">';
?>