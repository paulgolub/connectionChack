<?php

$db ="museogibellina_servizispeciali_it";
$db_host = "localhost";
$db_user = "user_name;
$db_password = "password";
$db_connection= mysqli_connect($db_host,$db_user,$db_password);

if (!$db_connection) 
{
	print "Connot connect to DB";
	exit;
}

# mysqli_select_db($db_connection,$db);

$start_time = microtime(true);

$result = mysqli_query($db_connection, "SELECT * FROM users");

$end_time = microtime(true);
$total_time = $end_time - $start_time;

echo "Time: " . $total_time . "s";

?>
