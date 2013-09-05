<?php
require_once "db_setting.inc";

$dbc = new mysqli(DB_HOST_HOME, DB_QUERY_USER, DB_QUERY_PASS, POTI_DB);
if (mysqli_connect_errno()) {
	exit;
}

$q = strtolower($_GET["q"]);
if (!$q) return;

$origin_query = "select distinct from_city from flights where from_city LIKE '%$q%';";

$origin_result = $dbc->query($origin_query);

$origin_options = "";

while ($a_row = $origin_result->fetch_assoc()) {
	echo "$a_row[from_city]\n";
}

?> 