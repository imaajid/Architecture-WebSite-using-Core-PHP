<?php

include_once("config.php");




    $sql = "INSERT INTO contact_us(name,email,subject,message)VALUES ('" . $_GET["name"] . "','" . $_GET["email"] . "','" . $_GET["subject"] . "','" . $_GET["message"] ."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    $conn->close();

                            ?>