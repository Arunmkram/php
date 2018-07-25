<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $car = array("Porche", "Rolls Royce", "Audi");
var_dump($car[1]);
$car = array("Porche", "Rolls Royce", "Audi");
$arrlength = count($car);

for($x = 0; $x < $arrlength; $x++) {
    
    echo "$car[$x] number is $x";
    echo "<br>";
}
        $x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
for ($x = 0; $x <= 10; $x++) {    
echo "The number is: $x <br>";
} 
        function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function

        ?>
    </body>
</html>
