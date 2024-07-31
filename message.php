<?php // message.php



$messages = [
     1 => "Data successfully added",
     2 => "Data successfully updated",
     3 => "Data successfully deleted",
     4 => "MySQL Database Error, please check the entered query",
];

$messages_id = isset($_GET["message"]) ? (int) $_GET["message"] : 0;

if (isset($messages[$messages_id])) {
     echo $messages[$messages_id];
} else {
     echo "You can add a product by clicking on ' add new employer ' ";
} 