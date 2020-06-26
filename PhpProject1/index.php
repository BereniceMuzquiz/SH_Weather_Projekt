<!DOCTYPE html>
<html>
    <head>
        <title>Smart Home Application</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/myStyle.css">
    </head>
    <body>
        <?php
            include './inc/db_connection.php';
            include './inc/mainBtn.php';
          ?>
        <div class="container">
            <form method="post" action="" >
                <div>
                    <button type="submit" name="Off" class="btn btn-info ">All Light OFF</button>
                    <button type="submit" name="on" class="btn btn-warning ">All Light ON</button>
                    <button type="submit" name="down" class="btn btn-info ">All Blinder Down</button>
                    <button type="submit" name="up" class="btn btn-success ">All Blinder UP</button>
                    <br>
                    <input type="text" name="name">
                    <button type="submit" name="add_Btn" class="btn btn-primary ">Add a room</button>
                    <button type="submit" name="del_Btn" class="btn btn-danger ">Delete</button>
                </div>
                
        <div class="row">
      <?php
                include './inc/rooms.php';
                include './inc/weather.php';
      ?>  
        </div>
        </div>
        </form>
    </body>
</html>
