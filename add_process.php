<?php // add_process.php



include "database_conn.php";

if (isset($_POST['submit']))
{
   
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $created = date("Y-m-d");

    $query = "INSERT INTO employers (firstname, lastname, email, phone,created) VALUES ('$firstname', '$lastname', '$email','$phone', '$created')";

    
    if (mysqli_query($db_connect, $query)) {
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location: index.php?message=" . $message . ""); ?>