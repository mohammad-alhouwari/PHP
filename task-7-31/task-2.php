<?php
   echo " <br><br>--------------Q1--------------<br><br> ";
   $color= array("White","green","red");
   foreach ($color as  $value) {
    echo"<li>$value</li> ";
   }
   echo "<br><br>--------------Q2--------------<br><br>";


   $cities = array(
"Italy" => "Rome",
"Luxembourg" => "Luxembourg",
"Belgium" => "Brussels",
"Denmark" => "Copenhagen",
"Finland" => "Helsinki",
"France" => "Paris",
"Slovakia" => "Bratislava",
"Slovenia" => "Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland" => "Dublin",
"Netherlands" => "Amsterdam",
"Portugal" => "Lisbon",
"Spain" => "Madrid"
);
asort($cities);

foreach ($cities as $key => $value) {
   echo "The capital of $key is $value <br> ";
}
echo "<br>";
   echo "<br><br>--------------Q3--------------<br><br>";
   $color= array(4 =>"White",6=>"green",11=>"red");
   echo$color[4];

   echo "<br><br>--------------Q4--------------<br><br>";
$fruits=["d"=>"lemon","a"=>"orang" ];
foreach ($fruits as $key => $value) {
   echo "$key = $value <br>";
}

   ?>