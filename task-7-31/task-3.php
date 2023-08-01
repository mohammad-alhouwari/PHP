<?php
   echo "<br><br>--------------Q1--------------<br><br> ";

$sum=0;
for ($i=0; $i <=30 ; $i++) { 
   $sum+=$i;
}
echo $sum;
   echo "<br><br>--------------Q4--------------<br><br>";
for ($i=1; $i <= 5; $i++) { 
    for ($j=1; $j <=5 ; $j++) { 
       if ($i==$j) {
     echo $i ." ";
       }else{
        echo "0"." ";
       }
      
    }
    echo "<br>";
}
   echo "<br><br>--------------Q5--------------<br><br>";
$factorial=5;
$fact=1;
for ($i=1; $i <=$factorial ; $i++) { 
  $fact*=$i;
}
echo $fact;
   echo "<br><br>--------------Q6--------------<br><br>";

$fibseq=[0,1];
for ($i=1; $i < 10; $i++) { 
for ($j=$i-1; $j <$i ; $j++) { 
$summ= $fibseq[$j]+$fibseq[$i];
array_push($fibseq,$summ);
}
}
print_r( $fibseq);
 
   echo "<br><br>--------------Q9--------------<br><br>";
    $patrin=0;
for ($i=0; $i < 5; $i++) {  
for ($j=-1; $j <$i ; $j++) { 
    $patrin++;
    echo $patrin ." ";
}

echo "<br>";
}
?>