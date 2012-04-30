<?php
require_once "db_setting.inc";

$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
if (mysqli_connect_errno()) {
	exit;
}

$q = strtolower($_GET["q"]);
if (!$q) return;

$destination_query = "select distinct to_city from flights where to_city LIKE '%$q%';;";

$destination_result = $dbc->query($destination_query);

$destination_options = "";

while ($a_row = $destination_result->fetch_assoc()) {
	echo "$a_row[to_city]\n";
}

?> 