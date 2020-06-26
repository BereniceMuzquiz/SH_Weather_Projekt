    <?php
        //API
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=vienna&appid=95e7781a3b426c6840debaca1dbeaa6b';
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $speed = $data['wind']['speed'];
        #echo $speed;
        $soll = 70;
        if ($speed > $soll) {
            echo '<br>';
            $sql = "UPDATE `rooms` SET `blinder`='Up'";
            $queryUpdate = mysqli_query($conn, $sql);
        }
    ?>
