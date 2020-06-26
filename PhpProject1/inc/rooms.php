<?php
        $sql = 'SELECT * FROM rooms';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            $room = $row['roomname'];
            $light = $row['light'];
            $blinder = $row['blinder'];
            $id = $row['id'];
            $dimmer = $row['dimmer'];
        echo '<div class="col-4 border">'.
                '<h3>'.$room.'</h3>'; 
        echo 'Light : ';
        if ($row['light'] == "ON") {
    echo '<img src="pic/ON.png" height="50" width="50">';
        } else {
    echo '<img src="pic/OFF.png" height="50" width="50">';
        }
        echo '<br>';
            echo '<form method="post" acction="#" >' .
            '<div class="form-group">' .
            '<select required class="form-control" name="on_off' . $id . '" id="on_off' . $id . '">' .
            '<option value="ON">ON</option>' .
            '<option value="OFF">OFF</option>' .
            '</select>' .
            '<button type="submit" name="light_Btn' . $id . '" class="btn btn-primary">Submit</button>' .
            '</div>' .
            '</form>';
    if (isset($_POST["light_Btn$id"])) {
    $on_off = mysqli_real_escape_string($conn, $_POST["on_off$id"]);
    $sql = "UPDATE `rooms` SET `light`='$on_off' WHERE id=$id";
    $queryUpdate = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
        }
        echo '<br>';
        echo 'Blinder : ';
        if ($blinder == "Up") {
    echo '<img src="pic/UP.png" height="50" width="50">';
        } else {
    echo '<img src="pic/DOWN.png" height="50" width="50">';
        }
            echo '<br>';
            echo '<form method="post" acction="#" >' .
            '<div>' .
            '<select required class="form-control" name="blinder' . $id . '" id="blinder' . $id . '">' .
            '<option value="Down">Down</option>' .      
            '<option value="Up">Up</option>' .                            
            '</select>' .
            '<button type="submit" name="blinderBtn' . $id . '" class="btn btn-primary">Submit</button>' .
            '</div>' .
            '</form>';
    if (isset($_POST["blinderBtn$id"])) {
    $status = mysqli_real_escape_string($conn, $_POST["blinder$id"]);
    $sql = "UPDATE `rooms` SET `blinder`='$status' WHERE id=$id";
    $queryUpdate = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
        }
            echo '<br>';
            echo 'Dimmer : '.$dimmer;
            echo '<form method="post" acction="#" >' .
            '<div>' .
            '<select required class="form-control" name="dimmer' . $id . '" id="dimmer' . $id . '">' .
            '<option value="0">0</option>' .      
            '<option value="25%">25%</option>' .
            '<option value="50%">50%</option>' .
            '<option value="75%">75%</option>' .
            '<option value="100%">100%</option>' .
            '</select>' .
            '<button type="submit" name="dimmerBtn' . $id . '" class="btn btn-primary">Submit</button>' .
            '</div>' .
            '</form>';
    if (isset($_POST["dimmerBtn$id"])) {
    $dimmer_status = mysqli_real_escape_string($conn, $_POST["dimmer$id"]);
    $sql = "UPDATE `rooms` SET `dimmer`='$dimmer_status' WHERE id=$id";
    $queryUpdate = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
        }
        echo '</div>';
    
                        };           
            
?>
