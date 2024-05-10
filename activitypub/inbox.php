<?php header('Content-Type: application/activity+json'); ?>
<?php

// Get the JSON data from the POST request
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Check if the type is "follow"
if ($data['type'] === "Follow") {

    file_put_contents('followers.txt', $data['actor'] . PHP_EOL, FILE_APPEND);

} else {
    // Type is not "follow", handle accordingly
    // ...
}

?>