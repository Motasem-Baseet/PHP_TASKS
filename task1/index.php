<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>task 1 </p>";
    $colors = array('green', 'white', 'yellow');
    echo '<ul>';
    foreach($colors as $color){
        echo "<li>$color</li>";
    };
    echo "<p>task 2 </p>";

    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
    asort($cities);
    foreach($cities as $citie => $country){
        echo "the capital of " . $country . " is " . $citie . ".";
        echo "<br>";

    }

    echo"<p>task 3</p>";

    $color = array (4 => 'white', 6 => 'green', 11=> 'red');

    // echo reset($color[1]);

    // $values = array_values($color);
    // echo $values[0];

    echo $color["4"];

    
    echo"<p>task 4</p>";

    $numbers = array();
    array_push($numbers, "1", "2", "3", "4", "5");
    $newItem = "$";
    $location = 3;
    array_splice($numbers, $location,0, $newItem);
    echo implode(' ', $numbers);

    echo "<p>task 5</p>";

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    ksort($fruits);

    foreach($fruits as $letter => $fruit){
        echo $letter . " = " . $fruit;
        echo"<br>";
    } 

    echo "<p>the average and list 7 if highest and lowest</p>";

    $tepreture = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73);
    $average = array_sum($tepreture)/count($tepreture);
    echo "the average = " .number_format($average, 1);
    echo "<br>";
    $largest = array_slice($tepreture,0,7);
    $lowest = array_slice($tepreture,-5);
    echo  "7 of larg numbers = " .implode(", ", $largest) ;
    echo "<br>";
    echo "7 of lowest number = " .implode(", ",  $lowest);

    echo"<p> merge array </p>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $array1 = array_merge($array2);
    print_r($array1);

    echo "<p>converst to Uppercase</p>";

    function convertToUpperCase($colors1) {
        return array_map('strtoupper', $colors1);
    }
    
    $colors1 = array("red", "blue", "white", "yellow");
    
    $upperCaseColors = convertToUpperCase($colors1);
    
    print_r($upperCaseColors);

    echo "<p>----------------Function---------------</p>";

    $number = 3; 

function isPrime($num) {
    if ($num <= 1) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


if (isPrime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}


echo "<p>reverse string</p>";
echo "input is remove<br>";
echo strrev("remove");

echo "<p>swap numbers</p>";

$x = 12;
$y = 10;
function swap(&$x , &$y){
    $z = $x;
    $x = $y;
    $y = $z;
}

swap($x,$y);
echo"x = $x , y = $y";

echo "<p>armstrong numbers</p>";

function Armstrong($num){
    $srtnum = strval($num);
    $intnum = strlen($srtnum);

    $sum = 0;

    for($i = 0; $i < $intnum; $i++){
        $digit = intval($srtnum[$i]);

        $sum += pow($digit, 3);
    }
    if ($sum == $num){
        return "$num is an armstrong";
    }else {
        return "$num is not an armstrong";
    }
}
echo Armstrong(407);

echo "<p>Palindromes string</p>";

function palindromes($str){
    $str = strtolower($str);
    $replac = preg_replace("/[^A-Za-z0-9]/", '', $str);
    $reverce = strrev($replac);
    
    if ($str == $reverce){
        return "yes, it is a plaidndrome";
    }else{
        return "no, it os not a palindrome";
    }
}
echo palindromes("Eva, can I see bees in a cave?");


echo "<p>duplicated in array</p>";


$array3 = array(2, 4, 7, 4, 8, 4);
print_r (array_unique($array3));


echo "<p>---------Logical statment-------</p>";
echo "<p>check two numbers if equal 30</p>";


function checksum1($num1 , $num2) {
    $sum1 = $num1 + $num2;
    
    
    if ($sum1 == 30){
        return $sum1;
    }else{
        return "false"; 
    }
}
$num1 = 10;
$num2 = 10;
echo checksum1($num1, $num2);

echo "<p>check two numbers if equal 30</p>";

function oneNumber($num4){
    if ($num4 > 0 && $num4 % 3 == 0){
        return $num4;
    }else {
        return "flase";
    }
}
$num4 = 20;
echo oneNumber($num4);


echo "<p>check if range between 20-50</p>";

function range1($num5){
    if ($num5 >= 20 && $num5 <=50){
        return $num5;
    }else {
        return "false";
    }
}
$num5 = 30;
echo range1($num5);

echo "<p>check the larges number</p>";
function largest($num6 , $num7 , $num8){
    $largeNum = $num6;
    
    if($num7 > $largeNum){
        $largeNum =  $num7;
    } if ($num8 > $largeNum){
        $largeNum = $num8;
    }
    return $largeNum;
    
}
$num6 = 1;
$num7 = 5;
$num8 = 9;
echo "The largest number is :" . largest($num6 , $num7 , $num8);

echo "<p>check the larges number</p>";
function eBill($unit){
    if ($unit > 0 && $unit <=50 ){
        return "2.50 JD/Unit";
    }if($unit > 50 && $unit <=100){
        return "5.00 JD/Unit";
    }if($unit > 100 && $unit <= 250){
        return "6.20 JD/Unit";
    }if($unit >250 ){
        return "7.50/Unit";
    }
}


$unit = 600;
echo eBill($unit);


echo "<p>calculator</p>";
function Calculator($fNum , $sNum , $operation){
    switch ($operation){
        case 'add':
            return $fNum +$sNum;

        case 'sub':
            return $fNum - $sNum;

            case 'multi':
                return $fNum * $sNum;

                case 'div':
                    if ($fnum == 0){
                        return "error : Div by Zero is not allowed";
                    }
                    return $fnum /$sNum;

                    default:
                    return "Invalid Opration.";
    }
}

    $fnum = 10;
    $sNum =15;
    $operation = 'add';

    
    $result = Calculator($fNum, $sNum , $operation);
    echo "the result is $result";
    
    
    echo "<p>elogoble to vote </p>";
    
    function age($ages){
        if ($ages <18){
            return "$ages is not eligible to vote";
        }else {
            return "you can vote ";
        }
    }
    $ages = 15;
    echo age($ages);
    
    
    echo "<p>elogoble to vote </p>";
    function checkNumber($num9) {
        if ($num9 > 0) {
            return "Positive";
        }
        elseif ($num9 < 0) {
            return "Negative";
        }
        else {
            return "Zero";
        }
    }
    $num9 = -60;
    echo checkNumber($num9);
    
    
    echo "<p>elogoble to vote </p>";
    function findGrade($scores) {
        $average = array_sum($scores) / count($scores);
        
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }
    
    $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
        $grade = findGrade($scores);
    echo "The grade is: $grade";    

    
    echo "<p>-------------LOOPS------------- </p>";
    $numbers = [];
    for ($i = 0; $i <= 10; $i++){
        $numbers[] = $i;
    }
    echo implode("-", $numbers);
    
    echo "<p>display the sum from 1 to 30</p>";
    $csum = 0;
    for ($i = 0; $i <= 30; $i++){
        $csum += $i;
        
    }
    echo "the total: $csum";
    
    echo "<p>---print letters----</p>";
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= 5;$j++){
            if ($i == 1){
                echo "A ";
            }
            elseif($i == 2){
                if ($j <= 3){
                    echo "A ";
                }else {
                    echo "B ";
                }
            }
            if ($i ==3){
                if ($j <=2){
                    echo "A ";
                }else{
                    echo "C ";
                }
            }
            if ($i == 4){
                if($j <=1){
                    echo "A ";
                }else{
                    echo "D ";
                }
            }
            if ($i == 5){
                if ($j <= 5){
                    echo "D ";
                }
            }
        }
        
        echo nl2br("\n");
    }
    
    
    echo "<p>---print numbers----</p>";
    
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= 5;$j++){
            if ($i == 1){
                echo "1 ";
            }
            elseif($i == 2){
                if ($j <= 3){
                    echo "1 ";
                }else {
                    echo "2 ";
                }
            }
            if ($i ==3){
                if ($j <=2){
                    echo "1 ";
                }else{
                    echo "3 ";
                }
            }
            if ($i == 4){
                if($j <=1){
                    echo "1 ";
                }else{
                    echo "4 ";
                }
            }
            if ($i == 5){
                if ($j <= 5){
                    echo "5 ";
                }
            }
        }
        
        echo nl2br("\n");
    }
    
    echo "<p>---print numbers with space in last row----</p>";
    

    for ($i = 1; $i <= 5; $i++) {
        if ($i == 5) {
            echo "  "; 
        }
        
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j) {
                echo $i . " ";
            } else {
                echo "0 ";
            }
        }
        
        echo nl2br("\n");
    }

    echo "<p>----fact----</p>";
    $num10 = 5;
    $facnum = 1;
    
    for($i = 1; $i <=$num10; $i++){
        $facnum *= $i;
    }
    
    echo $facnum;
    
    
    echo "<p>----table----</p>";
    
    echo '<table border="1" cellpadding="3px" cellspacing="0px">';
    
    for ($i = 1; $i <= 6; $i++){
        echo "<tr>";
        
        for ($j = 1; $j <= 5; $j++){
            $reslt = $i * $j;
            echo "<td> $i * $j = $reslt</td> ";
        }
        echo "</tr>";   
    }
    
    echo "</table>";
    
    
    echo "<p>-----------PROBLEM SOLVING-----------</p>";
    
    
    $prief = "I am motasem Full stack developer at orange academy";
    
    echo strtoupper($prief."<br><br>");
    echo strtolower($prief."<br><br>");
    echo ucfirst($prief."<br><br>");
    echo ucwords($prief."<br><br>");

    $date = '085119';
    $firstsub = substr($date , 0 , 2);
    $secsub = substr($date , 2, 2);
    $third = substr($date , 4 ,2);
    
    $dateform = $firstsub . ":" . $secsub . ":". $third;
    echo $dateform;
    echo nl2br("\n");
    
    
    function check($string ,$word){
        $checkword = strpos($string, $word);
        
        
        if($checkword !== false){
            return "'$word' was found";
        }else{
            return "'$word' was not found";
        }
    }
    $word1 = $prief;
    $find = "orange";
    
    $finded = check($word1 , $find);
    echo $finded;
    
    
    
    echo "<p>-------url-------</p>";
    
    $url1 = "www.orange.com/index.php";
    $exturl = parse_url($url1, PHP_URL_PATH);
    $filename = basename($exturl);
    echo  $filename;
    
    
    echo "<p>-------Email-------</p>";
    $email = "info @gmail.com";
    $findAt = strstr($email , " ", true);
    echo $findAt;
    
    
    echo "<p>-------Random password-------</p>";
    
    function pass($password){
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        
        return substr(str_shuffle($data), 0,($password));
    }
    
    echo pass(7);
    
    
    echo "<p>-------replace the fist word-------</p>";

    $word2 = "That new trainee is so genius.";
    $newWord = "Our";

    $lastWord = explode(" ", $word2);
    $word3[0] = $newWord;
    $lastWord1 = implode(" ",$word3);

    echo $lastWord1;

?>
</body>
</html>