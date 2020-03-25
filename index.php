
<H1> Namu Darbai </H1>


<?php

echo ".Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert metodą.";

echo "</br>";
echo "</br>";

$num = 3;
echo $num ;

echo "</br>";
echo "</br>";


echo "2. Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.";

echo "</br>";
echo "</br>";

$a = 10;
$b = 2;
$sum=$a+$b;
$Sub=$a-$b;
$Multi = $a*$b;
$Divi = $a/$b;
echo "suma yra = ";  echo $sum ;

echo "</br>";

echo "skirtumas yra = "; echo $Sub;

echo "</br>";

echo "daugyba yra = "; echo $Multi;

echo "</br>";

echo "dalyba yra = "; echo $Divi;

echo "</br>";
echo "</br>";
echo "</br>";

echo "3. Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę." ;


echo "</br>";
echo "</br>";

$c = 15;
$d = 2;
$rez = $c+$d ;
echo $rez;

echo "</br>";
echo "</br>";

echo nl2br("4. Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c.\r\n 
Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result");
echo "</br>";
echo "</br>";

$A = 17;
$B = 10;
$C =$A+$B;
$D = 7;
$sumOfcd = $C+$D;
echo "rezultatas yra = "; echo $sumOfcd;

echo "</br>";
echo "</br>";

echo "5. Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane";

echo "</br>";
echo "</br>";

$str = "Hello World!" ;
echo $str;

echo "</br>";
echo "</br>";

echo "6. Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“";

echo "</br>";
echo "</br>";

$str1 = "Hello";
$str2 = "World!";
echo $str1 . " " .  $str2;

echo "</br>";
echo "</br>";

echo "7. Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“ ";
echo "</br>";
echo "</br>";

$name = "Karolis !" ;
echo "Hello,". " " . $name ;

echo "</br>";
echo "</br>";

echo "8. Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’ ";

echo "</br>";
echo "</br>";

$age = 34;
echo "I'am ". $age ." old!";

echo "</br>";
echo "</br>";

echo "9. Paklauskite vartotojo vardo naudodamiesi promt metodais. Su alert parodykite pranešimą „Your name %name%“. ";

echo "</br>";
echo "</br>";


function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
$prompt_msg = "Please type your name.";
$name = prompt($prompt_msg);

$output_msg = "Your name ".$name."!";
echo($output_msg);

echo "</br>";
echo "</br>";


?>

