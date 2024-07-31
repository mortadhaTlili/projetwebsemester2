<?php // delete.php



include "database_conn.php";

$ID = $_GET["ID"];

$query = "DELETE FROM employers WHERE ID='" . $ID . "'";

if (mysqli_query($db_connect, $query)) {
    $message = 3;
} else {
    $message = 4;
}

header("Location: index.php?message=" . $message . ""); 