<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Assignment 1</title>

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f2f4f7;color:#333;padding:30px 15px}
.container{max-width:950px;margin:auto}
.title{background:#2563eb;color:white;text-align:center;padding:20px;border-radius:10px;margin-bottom:25px;box-shadow:0 3px 10px #0002}
.title h2{font-size:28px}
.box{background:white;border-radius:10px;padding:20px;margin-bottom:20px;border-left:6px solid;box-shadow:0 3px 10px #0001}
.box h3{margin-bottom:15px;font-size:20px}
.box p{font-size:16px;line-height:1.8}
.result{background:#f8fafc;padding:10px 15px;border-radius:6px;margin:7px 0}

.box1{border-color:#2563eb}.box1 h3{color:#2563eb}
.box2{border-color:#16a34a}.box2 h3{color:#16a34a}
.box3{border-color:#f59e0b}.box3 h3{color:#f59e0b}
.box4{border-color:#dc2626}.box4 h3{color:#dc2626}
.box5{border-color:#9333ea}.box5 h3{color:#9333ea}
.box6{border-color:#0891b2}.box6 h3{color:#0891b2}
.box7{border-color:#ea580c}.box7 h3{color:#ea580c}
.box8{border-color:#0f766e}.box8 h3{color:#0f766e}
.box9{border-color:#db2777}.box9 h3{color:#db2777}
.box10{border-color:#4f46e5}.box10 h3{color:#4f46e5}

table{width:100%;border-collapse:collapse;margin-top:10px}
td{border:1px solid #ddd;padding:8px;text-align:center}
tr:first-child td{background:#0f766e;color:white;font-weight:bold}
tr:hover{background:#f1f5f9}

@media(max-width:600px){
body{padding:15px 10px}.box{padding:15px}
.title h2{font-size:23px}.box h3{font-size:18px}
td{padding:5px;font-size:12px}
}
</style>
</head>

<body>
<div class="container">

<div class="title">
<h2>PHP Assignment 1</h2>
</div>

<?php

// QUESTION 1
echo "<div class='box box1'>";
echo "<h3>1. Greatest and Smallest Number</h3>";

$a=15;
$b=8;
$c=20;

if($a>=$b && $a>=$c)$greatest=$a;
elseif($b>=$a && $b>=$c)$greatest=$b;
else $greatest=$c;

if($a<=$b && $a<=$c)$smallest=$a;
elseif($b<=$a && $b<=$c)$smallest=$b;
else $smallest=$c;

echo "<div class='result'>Greatest = $greatest</div>";
echo "<div class='result'>Smallest = $smallest</div>";
echo "</div>";


// QUESTION 2
echo "<div class='box box2'>";
echo "<h3>2. Divisibility Check</h3>";

$num=15;

if($num%3==0 && $num%5==0)
    echo "<p>$num is divisible by both 3 and 5.</p>";
elseif($num%3==0)
    echo "<p>$num is divisible by 3.</p>";
elseif($num%5==0)
    echo "<p>$num is divisible by 5.</p>";
else
    echo "<p>$num is divisible by neither 3 nor 5.</p>";

echo "</div>";


// QUESTION 3
echo "<div class='box box3'>";
echo "<h3>3. Odd Numbers from 2 to 20</h3>";

for($i=2;$i<=20;$i++)
    if($i%2!=0) echo $i." ";

echo "<br><br>";
echo "<h3>Even Numbers from 35 to 7</h3>";

for($i=35;$i>=7;$i--)
    if($i%2==0) echo $i." ";

echo "</div>";


// QUESTION 4
echo "<div class='box box4'>";
echo "<h3>4. Numbers Divisible by 2 and 5</h3>";

for($i=50;$i>=2;$i--)
    if($i%2==0 && $i%5==0) echo $i." ";

echo "</div>";


// QUESTION 5
echo "<div class='box box5'>";
echo "<h3>5. Reverse of a Number</h3>";

$num=12345;
$reverse=0;

while($num>0){
    $digit=$num%10;
    $reverse=($reverse*10)+$digit;
    $num=(int)($num/10);
}

echo "<div class='result'>Reverse = $reverse</div>";
echo "</div>";


// QUESTION 6
echo "<div class='box box6'>";
echo "<h3>6. LCM of Two Numbers</h3>";

$a=8;
$b=12;
$lcm=($a>$b)?$a:$b;

while(true){
    if($lcm%$a==0 && $lcm%$b==0) break;
    $lcm++;
}

echo "<div class='result'>LCM of $a and $b = $lcm</div>";
echo "</div>";


// QUESTION 7
echo "<div class='box box7'>";
echo "<h3>7. HCF of Two Numbers</h3>";

$a=18;
$b=24;

while($b!=0){
    $remainder=$a%$b;
    $a=$b;
    $b=$remainder;
}

echo "<div class='result'>HCF = $a</div>";
echo "</div>";


// QUESTION 8
echo "<div class='box box8'>";
echo "<h3>8. Multiplication Table</h3>";

echo "<table>";

for($i=1;$i<=12;$i++){
    echo "<tr>";

    for($j=1;$j<=12;$j++)
        echo "<td>".($i*$j)."</td>";

    echo "</tr>";
}

echo "</table>";
echo "</div>";


// QUESTION 9
echo "<div class='box box9'>";
echo "<h3>9. Prime or Non-Prime</h3>";

$num=17;
$isPrime=true;

if($num<2)$isPrime=false;

for($i=2;$i<=$num/2;$i++){
    if($num%$i==0){
        $isPrime=false;
        break;
    }
}

if($isPrime)
    echo "<div class='result'>$num is a Prime number.</div>";
else
    echo "<div class='result'>$num is a Non-Prime number.</div>";

echo "</div>";


// QUESTION 10
echo "<div class='box box10'>";
echo "<h3>10. Prime Numbers from 10 to 50</h3>";

for($num=10;$num<=50;$num++){

    $isPrime=true;

    if($num<2)$isPrime=false;

    for($i=2;$i<=$num/2;$i++){
        if($num%$i==0){
            $isPrime=false;
            break;
        }
    }

    if($isPrime) echo $num." ";
}

echo "</div>";

?>

</div>
</body>
</html>