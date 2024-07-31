<?php // edit_process.php

/*
* genelify.com
*/

include "database_conn.php";

if (count($_POST) > 0)
{
    $ID = $_POST["ID"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $query =
        "UPDATE employers set ID='" .
        $ID .
        "', firstname='" .
        $firstname .
        "', lastname='" .
        $lastname .
        "', email='" .
        $email .
        "', phone='" .
        $phone .
        "' WHERE ID='" .
        $ID .
        "'"; 

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location: index.php?message=" . $message . "");
