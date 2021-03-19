<?php

session_start();
if(!isset($_SESSION["userid"]) || $_SESSION["level"] !== 1) {
	header("location: ./login.php?error=noperm");
}

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

$response = [
	'value' => 0,
	'error' => 'All good',
	'data' => null,
];

if ($contentType === 'application/json') {
	$content = trim(file_get_contents('php://input'));

	$decoded = json_decode($content, true);

	if (! is_array($decoded)) {
		$decoded = json_decode($decoded, true);
		require_once '../dbh-inc.php';

		$sql = mysqli_query($conn, "${decoded}");
		$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

		$response['data'] = $result;


		$response['value'] = 1;
		$response['error'] = null;

	} else {
		$response['error'] = 'Bad JSON';
	}
} else {
	$response['error'] = 'Content type is not "application/json"';
}

echo json_encode($response);