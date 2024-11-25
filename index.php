<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 38 php intro</title>
</head>
<body>
    <h1> This is our first class on php </h1> 


    <!-- Try php in html -->
     <?php
     echo "This is php in html block."."<br>";
     ?>
</body>
</html>

<?php
// num: echo "Hello World!";
// num: echo "Hello World! <br>";

// for Concatenition use dot(.) and  js(+)
num: echo "Hello World!"."<br>";


$x = 10;
$y = 40;
$result = $x+$y;

echo "The result is = ". $result;
echo "<h1>The result is = </h1>". $result;
echo "<h1>The result is = ". $result."</h1>";

//Now Loop again
// for($i=1; $i<=5; $i++){
//     echo "Hello World!";
// }

for($i=1; $i<=5; $i++){
    echo "Hello World!"."<br>";
}

// php_array

$phpArray = [40, 50, 76, 30];
echo $phpArray[2]."<br>";

// Using_for_loop
// echo $phpArray[0];
// echo $phpArray[1];
// echo $phpArray[2];
// echo $phpArray[3];

for($i=0; $i<=3; $i++){
    // echo $phpArray[$0];
    // echo $phpArray[$0];
    // echo $phpArray[$0]."<br>";
    echo $phpArray[$i]."<br>";
}
?>

