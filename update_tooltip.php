<?php
error_reporting(E_ALL);

include("dbcon.php");

?>
<?
$result=mysql_query("select * from polling");

$row=mysql_fetch_array($result);

$dislike=$row['dislike'];
$like=$row['liked'];
$average=$row['average'];

?>
<span class="totalstats">
Good: <?php echo $like?>, Not Good: <?php echo $dislike?>,  Average: <?php echo $average?>
</span>
