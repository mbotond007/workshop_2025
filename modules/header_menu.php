<?php

include("../connect.php");

$result = $connection->query("select * from header_menu");

if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => "Database query failed: " . $connection->error]);
    exit;
}

$answer = array();

while ($row = mysqli_fetch_assoc($result)) {
    array_push($answer, $row);
}

echo json_encode($answer);

?>
