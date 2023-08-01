<!-- Q1 Write a PHP script to see if the specified year is a leap year or not. -->
<?php
echo"--------------Q1--------------<br><br>";
$year = 2013;
if ($year % 4 == 0) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}

?>
<!-- Q2 Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer. -->
<?php
echo"<br><br>--------------Q2--------------<br><br>";
$temperature=27;
if($temperature <20) {
    echo " we are in winter";
} else {
    echo "the season is summer.";
}
?>
<!-- Q3	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum -->
<?php
echo"<br><br>--------------Q3--------------<br><br>";

$num1=2;
$num2=2;

if($num1==$num2) {
    $summ1=($num1+$num2)*3;
    echo"($num1 + $num2) * 3 = $summ1";
}else{
    $summ2=($num1+$num2);
    echo"($num1 + $num2) =$summ2";
}
?>
<!-- Q4	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false -->
<?php
echo"<br><br>--------------Q4--------------<br><br>";
$num1=10;
$num2=10;
if(($num1+$num2)==30) {
    echo"true";
}else{

    echo"false";
}
?>
<!-- Q5	Write in PHP script to check if the given positive number is a multiple of 3. -->
<?php
echo"<br><br>--------------Q5--------------<br><br>";
$num=20;
if ( $num % 3 == 0) {
    echo"true";
}else{

    echo"false";
}
?>
<!-- Q6	Write a PHP script to check if the integer value is in the range of [20-50] inclusive. -->
<?php
echo"<br><br>--------------Q6--------------<br><br>";
$num=50;
if ($num<=50 && $num>=20) {
    echo"true";
}else{

    echo"false";
}
?>
<!-- Q7	Write PHP script to find the largest number between the three integers -->
<?php
echo"<br><br>--------------Q7--------------<br><br>";
$num1=1;
$num2=5;
$num3=9;
if ($num1>$num2 && $num1>$num3) {
    echo$num1;
}else if ($num2>$num1 && $num2>$num3){
    echo$num2;
}else{
    echo$num3;
}
?>
<!-- Q8	Write PHP script to calculate the monthly electricity bill according to these rules -->
<?php
echo"<br><br>--------------Q8--------------<br><br>";
$x=500;

if($x<=50){
    $JD=$x*2.5;
    echo"$JD JOD";
}else if($x<=150){
    $sumJD=$x-50;
    $Y=$sumJD*5;
    $JD=$Y+(50*2.5);
    echo"$JD JOD";
}else if($x<=250){
    $sumJD=$x-50-100;
    $Y=$sumJD*6.2;
    $JD=$Y+(50*2.5)+(100*5);
    echo"$JD JOD";
}else if ($x>250) {
    $sumJD=$x-50-100-100;
    $Y=$sumJD*7.5;
    $JD=$Y+(50*2.5)+(100*5)+(100*6.2);
    echo"$JD JOD";
}
?>
<!-- Q9	Write php script to check if a person is eligible to vote, minimum age required for voting is 18. -->
<?php
echo"<br><br>--------------Q9--------------<br><br>";
$age=15;
if ($num>=18) {
    echo"is eligible to vote";
}else{
    echo"is no eligible to vote";
}
?>
<!-- Q10	Write php script  to check whether a number is positive, negative or zero -->
<?php
echo"<br><br>--------------Q10--------------<br><br>";
$num=-60;
if ($num>0) {
    echo"positive";
}else if ($num<0){
    echo"negative";
}else{
    echo"zero";
}


?>
<!-- Q11	Write php script to make a calculator, the calculator should contain the four main operations  -->
<?php
echo"<br><br>--------------Q11--------------<br><br>";
$num1=6;
$num2=3;
echo $num1+$num2;
echo"<br>";
echo $num1-$num2;
echo"<br>";
echo $num1/$num2;
echo"<br>";
echo $num1*$num2;


?>
<!-- Q12	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject   -->
<?php
echo"<br><br>--------------Q12--------------<br><br>";
$grades = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$sum = array_sum($grades);
$score = $sum / count($grades);
switch ($score) {
    case $score < 60:
        echo "F" . "<br>";
        break;
    case $score >= 60 && $score < 70:
        echo "D" . "<br>";
        break;
    case $score >= 70 && $score < 80:
        echo "C" . "<br>";
        break;
    case $score >= 80 && $score < 90:
        echo "B" . "<br>";
        break;
    case $score >= 90 && $score <= 100:
        echo "A" . "<br>";
        break;
}


?>
