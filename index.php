<div style="text-align: center" >
<H1> Namu Darbai </H1>

<?php

echo "<h4>Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert metodą.</h4>";

$num = 3;
echo $num ;

echo "<h4>2. Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.</h4>";

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

echo "<h4>3. Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.</h4>" ;

$c = 15;
$d = 2;
$rez = $c+$d ;
echo $rez;

echo nl2br("<h4>4. Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c.\r\n 
Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result</h4>");

$A = 17;
$B = 10;
$C =$A+$B;
$D = 7;
$sumOfcd = $C+$D;
echo "rezultatas yra = "; echo $sumOfcd;

echo "<h4>5. Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane</h4>";


$str = "Hello World!" ;
echo $str;

echo "<h4>6. Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“</h4>";

$str1 = "Hello";
$str2 = "World!";
echo $str1 . " " .  $str2;

echo "<h4>7. Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“ </h4>";

$name = "Karolis !" ;
echo "Hello,". " " . $name ;

echo "<h4>8. Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’ </h4>";

$age = 34;
echo "I'am ". $age ." old!";

echo "<h4>9. Paklauskite vartotojo vardo naudodamiesi promt metodais. Su alert parodykite pranešimą „Your name %name%“.</h4> ";

function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
$prompt_msg = "Please type your name.";
$name = prompt($prompt_msg);

$output_msg = "Your name ".$name."!";
echo($output_msg);
echo "<hr>";
echo "</br>";
echo "<h4>1. Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.</h4>";

$arrr = array("a", "b", "c");

var_dump($arrr);
echo "</br>";
print_r(array_values($arrr));

echo "<h4>2. Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.</h4>";

echo "pirmas elementas  ";
var_dump($arrr[0]);
echo "</br>";
echo "pirmas elementas  ";
echo $arrr[0];
echo "</br>";
echo "antras elementas  ";
var_dump($arrr[1]);
echo "</br>";
echo "antras elementas  ";
echo $arrr[1];
echo "</br>";
echo "trecias elementas  ";
var_dump($arrr[2]);
echo "</br>";
echo "trecias elementas  ";
echo $arrr[2];

echo "<h4>3. Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d</h4>";

$ARR = array("a", "b", "c", "d");

echo $ARR[0] . " + " . $ARR[1] . ", " . $ARR[2] . " + " . $ARR[3];

echo "<h4>4. Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus,\r\n 
 priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.</h4>";

$new = array("2", "5", "3", "9");
$rez = $new[0] * $new[1] + $new[2] * $new[3];
echo $rez;

echo "<h4>5. Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.</h4>";

$obj = array("a" => "1", "b" => "2", "c" => "3");
echo "elemento c reikšmė yra ";
echo $obj['c'];

echo "elemento c reikšmė yra ";
print_r($obj['c']);

echo "<h4>6. Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną</h4>";

$weekdays = array(
    "1" => "pirmadienis",
    "2" => "antradienis",
    "3" => "trečiadienis",
    "4" => "ketvirtadienis",
    "5" => "penktadienis",
    "6" => "šestadienis",
    "7" => "sekmadienis");
$day = date('w');

echo "Šiandien yra: ";
print_r($weekdays[$day]);

echo "<h4>7. Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.</h4>";

$NEW = array([1, 2, 3], [4, 5, 6], [7, 8, 9]);

echo $NEW[1][0];

echo "<h4>8. Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.</h4>";

$object = array("js" => ["jQuery", "Angular"], "php" => "hello", "css" => "world");

echo $object["js"][0];

echo "<h4>8. Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
 Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.</h4>";

$WEEKDAYS = array(
    "LT" => ["sekmadienis", "pirmadienis", "antradienis", "trečiadienis", "ketvirtadienis", "penktadienis", "šeštadienis"],
    "EN" => ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"]
);

echo " Lietuviškai = ";
echo $WEEKDAYS["LT"][1];

echo " Angliškai = ";
echo $WEEKDAYS["EN"][3];


echo "<h4>9.Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną</h4>";

$lang = array("LT" => $WEEKDAYS["LT"], "EN" => $WEEKDAYS["EN"]);
$day = date('w');

echo $lang["LT"][$day];  // kodel rodo neteisingai ?
echo "</br>";
echo $lang["EN"][$day];

//
//<!--for-in-->
//<!--Duotas objektas green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.-->
//<!--Duotas objektas su raktais Mantas, Paulius, Mindaugas su reikšmėm 200, 300, 300. Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.-->
//<!--Duotas masyvas su elementais 2, 5, 9, 15, 0, 4. Naudodami for ir if parodykite masyvo elementus kurie yra daugiau nei 3, bet mažiau nei 10-->
//<!--Duotas masyvas su skaičiais. Skaičiai gali būti teigiami ir neigiami. Raskite teigiamų masyvo skaičių sumą.-->
//<!--Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus šio masyvo elementus pasinaudoję ciklais for, while-->
//<!--Duotas masyvas su elementais [2, 3, 4, 5]. Parodykite šio masyvo elementų produktą (daugyba), naudokite for ciklą.-->
//<!--Duotas objektas su raktais Vilnius, Riga, Talinas ir reikšmėm Lietuva, Latvija, Estija. Parodykite eilutes tokiu formatu: Vilnius yra Lietuva naudodami for-in ciklą;-->
//<!---->

echo "<h4>1. Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos. </h4>";

// skirtingai irasyti skaiciai, kad matyti isprintinus kaip skirtingai duoda atsakymus
$arr1 = array(1,2,3);
$arr2 = array("4","5","6");
$result = array_merge($arr1, $arr2);

print_r(array_values($result));
echo "<br>";
var_dump($result);


echo "<h4>2. Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1./h4>";

$arrr = array(1,2,3);

var_dump(array_reverse($arrr));
print_r(array_values( array_reverse($arrr)));

echo "<h4>3. Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.</h4>";

array_push($arr1, "4", "5","6");
array_unshift($arr1,   "-1","-2","-3");

print_r($arr1);
echo "</br>";
echo "</br>";
var_dump($arr1);

echo "<h4>4. Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.</h4>";

$arrrr = array("html","css","js");

echo ($arrrr[0]. " " .$arrrr[2]);

echo "<h4>5. Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.</h4>";

$masyvas = array("3","4","1","2","7");
echo "</br>";
echo "</br>";
sort($masyvas);
print_r($masyvas);

echo "<h4>6. Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.</h4>";

$arR = array("1","2","3","4","5");
array_splice($arR, 3);
var_dump($arR);

//echo "<h4>7. Duotas masyvas [1, 2, 3, 4, 5]. Konvertuokite masyvą į [1, 4, 5] </h4>";
//
//echo "</br>";
//echo "</br>";
//$Mas = [1, 2, 3, 4, 5];
//
//var_dump($MMM);

echo "<h4>8. Atspausdinkite skaičių stulpelį nuo 1 iki 100 </h4>";

$x = 1;

while($x <= 100) {
    echo "$x ";
    $x++;
}

echo "<h4> 9. Atspausdinkite skaičių stulpelį nuo 11 iki 33 </h4> ";

$z = 11;

while($z <= 33) {
    echo "$z ";
    $z++;
}

echo "<h4>10. Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100. </h4>";


for ($i=0; $i<=100; $i+=2) {
    echo $i." ";
}

echo "<h4>11. Naudodami ciklą parodykite sumą nuo 1 iki 100.</h4> ";

$sum = 0;
for ($i=1; $i<=100; $i++) {
     $sum += $i;
}

echo "Suma yra = ".$sum."";

echo "<h4> 12. Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane. </h4>";

$Duotas = [1, 2, 3, 4, 5];

foreach($Duotas as $value) {
    print $value;
}

echo "<h4>13. Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.</h4> ";


$T = [1, 2, 3, 4, 5];
$sum = 0;
foreach($T as $value){
    $sum = $sum + $value;
}
echo $sum;

echo "</br>";
echo "</br>";
echo "<hr>";

echo "<h4>1.Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.</h4> ";

function NumberSquere($v) {
    return $v*$v;
}

echo NumberSquere(2);
echo "<br>";
echo "funkcija gražina skaičių pakeltą nurodytu laipsniu";
echo "<br>";
echo pow(2,4);

echo "<h4>2. Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus. <h4>";

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo "Skaičių suma yra = ";  echo addNumbers(5,5);

echo "<h4>3. Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio. </h4>";

function ABD(int $a, int $b, int $c ) {
    return ($b-$a)/$c;
}


echo ABD(2, 3, 1);

echo "<h4>4. Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba. </h4>";

$WEEKDAYS = array(
    "LT" => ["sekmadienis",
        "pirmadienis",
        "antradienis",
        "trečiadienis",
        "ketvirtadienis",
        "penktadienis",
        "šeštadienis"] );

//declare(strict_types=1);
//function numbToWord (int $a );
//

?>
</div>

