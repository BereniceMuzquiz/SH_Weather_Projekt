<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h2><?PHP echo $name;?></h2>
      <h3><?PHP echo strftime("%A, %d. %b");
                      echo $citytime;?>
      </h3>
      <h5 id ="h_temp"><?PHP echo $res_currTemp;?>°C</h5>
    </div>
    <div class="col-md-5">
       <h5 id ="h_description"><?PHP echo $beschr;?></h5>
      <img src="img/<?PHP echo $img;?>.png" class="haupt" alt="no se">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h3>Heute</h3>
      <h5 id ="description"><?PHP echo $beschr;?></h5>
      <img src="img/<?PHP echo $img;?>.png" class="icon" alt="icon">
      <h5>Temperatur: <?PHP echo $res_currTemp;?>°C</h5>
      
      <h5>Windgeschwindgkeit: <?PHP echo $res_currGesch. " " ;?> km/h</h5>
      <h5>Windrichtung: <?PHP echo $res_currRicht;?></h5>
    </div>
    <div class="col-md-4">
      <h3>Morgen</h3>
      <h5 id ="description"><?PHP echo $beschr1;?></h5>
      <img src="img/<?PHP echo $img1;?>.png" class="icon" alt="icon">
      <h5>Temperatur: <?PHP echo $res_Temp_1;?>°C</h5>
      <h5>Windgeschwindgkeit: <?PHP echo $res_gesch_1. " " ;?> km/h</h5>
      <h5>Windrichtung: <?PHP echo $res_richt_1;?></h5>
    </div>

    <div class="col-md-4">
    <h3>Übermorgen</h3>
    <h5 id ="description"><?PHP echo $beschr2;?></h5>
    <img src="img/<?PHP echo $img2;?>.png" class="icon" alt="icon">
    <h5>Temperatur: <?PHP echo $res_Temp_2;?>°C</h5>
     <h5>Windgeschwindgkeit: <?PHP echo $res_gesch_2. " " ;?> km/h</h5>
     <h5>Windrichtung: <?PHP echo $res_richt_2;?></h5>
    </div>
  </div>
</div>
<a href="#7_tage" class="btn btn-secondary pull-right" role="button" aria-disabled="true">7 Tage Prognose</a>
<?php 
setlocale(LC_TIME, "de_DE");
echo "<br>";

?>
<div class="container" id = "7_tage">
<h2 id="table"><?PHP echo $name. ", "; 
  echo strftime("%A, %d. %b");?></h2>
<h3 id="table1">Wetter für 7 Tage</h3>
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">Heute </th>
      <td><?PHP echo strftime(" %d. %b");?></td>
      <td>Temperatur: <?PHP echo $res_currTemp;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_currGesch. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_currRicht;?></td>
      <td id ="description2"><?PHP echo $beschr;?></td>
      <td><img src="img/<?PHP echo $img;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
    <th scope="row"><?php $day1 = strtotime("next day");
            echo strftime('%A', $day1);?></th>
      <td><?php echo strftime('%d. %b', $day1);?></td>
      <td>Temperatur: <?PHP echo $res_Temp_1;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_gesch_1. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_richt_1;?></td>
      <td id ="description2"><?PHP echo $beschr1;?></td>
      <td><img src="img/<?PHP echo $img1;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
    <th scope="row"><?php $day2 = strtotime("2 days");
            echo strftime('%A', $day2);?></th>
      <td><?php echo strftime('%d. %b', $day2);?></td>
      <td>Temperatur: <?PHP echo $res_Temp_2;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_gesch_2. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_richt_2;?></td>
      <td id ="description2"><?PHP echo $beschr2;?></td>
      <td><img src="img/<?PHP echo $img2;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
      <th scope="row"><?php $day3 = strtotime("3 days");
            echo strftime('%A', $day3);?></th>
      <td><?php echo strftime('%d. %b', $day3);?></td>
      <td>Temperatur: <?PHP echo $res_Temp_1;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_currGesch. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_currRicht;?></td>
      <td id ="description2"><?PHP echo $beschr2;?></td>
      <td><img src="img/<?PHP echo $img2;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
    <th scope="row"><?php $day4 = strtotime("4 days");
            echo strftime('%A', $day4);?></th>
      <td><?php echo strftime('%d. %b', $day4);?></td>
      <td>Temperatur: <?PHP echo $res_Temp_2;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_currGesch. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_currRicht;?></td>
      <td id ="description2"><?PHP echo $beschr1;?></td>
      <td><img src="img/<?PHP echo $img1;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
    <th scope="row"><?php $day5 = strtotime("5 days");
            echo strftime('%A', $day5);?></th>
      <td><?php echo strftime('%d. %b', $day5);?></td>
      <td>Temperatur: <?PHP echo $res_currTemp;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_gesch_2. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_richt_1;?></td>
      <td id ="description2"><?PHP echo $beschr2;?></td>
      <td><img src="img/<?PHP echo $img2;?>.png" class="icon7" alt="icon"></td>
    </tr>
    <tr>
    <th scope="row"><?php $day6 = strtotime("6 days");
            echo strftime('%A', $day6);?></th>
      <td><?php echo strftime('%d. %b', $day6);?></td>
      <td>Temperatur: <?PHP echo $res_Temp_1;?>°C</td>
      <td>Windgeschwindgkeit: <?PHP echo $res_currGesch. " " ;?> km/h</td>
      <td>Windrichtung: <?PHP echo $res_richt_2;?></td>
      <td id ="description2"><?PHP echo $beschr;?></td>
      <td><img src="img/<?PHP echo $img;?>.png" class="icon7" alt="icon"></td>
    </tr>
  </tbody>
</table>
</div>
