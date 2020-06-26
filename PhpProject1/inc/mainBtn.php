<?php

        if (isset($_POST["add_Btn"])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $sql = "INSERT INTO rooms (roomname) VALUES ('$name')";
        $query = mysqli_query($conn, $sql);
    }
        if (isset($_POST["del_Btn"])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $sql = "DELETE FROM rooms WHERE roomname='$name'";
        $query = mysqli_query($conn, $sql);
    }      
        if (isset($_POST["Off"])) {
        $sql = "UPDATE `rooms` SET `light`='OFF'";
        $queryUpdate = mysqli_query($conn, $sql);
    }
        if (isset($_POST["on"])) {
        $sql = "UPDATE `rooms` SET `light`='ON'";
        $queryUpdate = mysqli_query($conn, $sql);
    }
        if (isset($_POST["down"])) {
        $sql = "UPDATE `rooms` SET `blinder`='Down'";
          $queryUpdate = mysqli_query($conn, $sql);
    }
            if (isset($_POST["up"])) {
        $sql = "UPDATE `rooms` SET `blinder`='Up'";
          $queryUpdate = mysqli_query($conn, $sql);
    }
#
?>
