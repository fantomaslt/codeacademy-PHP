
<!--for-in-->
<!--Duotas objektas green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.-->
<!--Duotas objektas su raktais Mantas, Paulius, Mindaugas su reikšmėm 200, 300, 300. Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.-->
<!--Duotas masyvas su elementais 2, 5, 9, 15, 0, 4. Naudodami for ir if parodykite masyvo elementus kurie yra daugiau nei 3, bet mažiau nei 10-->
<!--Duotas masyvas su skaičiais. Skaičiai gali būti teigiami ir neigiami. Raskite teigiamų masyvo skaičių sumą.-->
<!--Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus šio masyvo elementus pasinaudoję ciklais for, while-->
<!--Duotas masyvas su elementais [2, 3, 4, 5]. Parodykite šio masyvo elementų produktą (daugyba), naudokite for ciklą.-->
<!--Duotas objektas su raktais Vilnius, Riga, Talinas ir reikšmėm Lietuva, Latvija, Estija. Parodykite eilutes tokiu formatu: Vilnius yra Lietuva naudodami for-in ciklą;-->
<!---->


<?php
echo "1. Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos. ";
echo "<br>";
echo "<br>";
// skirtingai irasyti skaiciai, kad matyti isprintinus kaip skirtingai duoda atsakymus
$arr1 = array(1,2,3);
$arr2 = array("4","5","6");
$result = array_merge($arr1, $arr2);

print_r(array_values($result));
echo "<br>";
var_dump($result);

echo "<br>";
echo "<br>";

echo "2. Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.";
echo "<br>";
echo "<br>";
$arrr = array(1,2,3);

var_dump(array_reverse($arrr));
print_r(array_values( array_reverse($arrr)));

echo "<br>";
echo "<br>";

echo "3. Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.";

echo "</br>";
echo "</br>";

array_push($arr1, "4", "5","6");
array_unshift($arr1,   "-1","-2","-3");

print_r($arr1);
echo "</br>";
echo "</br>";
var_dump($arr1);
echo "</br>";
echo "</br>";
echo "4. Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.";
echo "</br>";
echo "</br>";

$arrrr = array("html","css","js");

echo ($arrrr[0]. " " .$arrrr[2]);

echo "</br>";
echo "</br>";

echo "5. Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.";


$masyvas = array("3","4","1","2","7");
echo "</br>";
echo "</br>";
sort($masyvas);
print_r($masyvas);

echo "</br>";
echo "</br>";

echo "6. Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.";
echo "</br>";
echo "</br>";
$arR = array("1","2","3","4","5");
array_splice($arR, 3);
var_dump($arR);

echo "</br>";
echo "</br>";

//echo "7. Duotas masyvas [1, 2, 3, 4, 5]. Konvertuokite masyvą į [1, 4, 5] ";
//
//echo "</br>";
//echo "</br>";
//$Mas = [1, 2, 3, 4, 5];
//
//var_dump($MMM);

echo "</br>";
echo "</br>";

echo "8. Atspausdinkite skaičių stulpelį nuo 1 iki 100 ";
echo "</br>";
echo "</br>";

$x = 1;

while($x <= 100) {
    echo "$x ";
    $x++;
}
echo "</br>";
echo "</br>";

echo "9. Atspausdinkite skaičių stulpelį nuo 11 iki 33 ";
echo "</br>";
echo "</br>";

$z = 11;

while($z <= 33) {
    echo "$z ";
    $z++;
}
echo "</br>";
echo "</br>";

echo "10. Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100. ";
echo "</br>";
echo "</br>";

for ($i=0; $i<=100; $i+=2)

{

    echo $i." ";
}
echo "</br>";
echo "</br>";

echo "11. Naudodami ciklą parodykite sumą nuo 1 iki 100. ";
echo "</br>";
echo "</br>";

$sum = 0;
for ($i=1; $i<=100; $i++) {
     $sum += $i;
}

echo "Sum of even numbers=".$sum."<br/>";


echo "</br>";
echo "</br>";

echo "12. Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane. ";
echo "</br>";
echo "</br>";

$Duotas = [1, 2, 3, 4, 5];


foreach($Duotas as $value) {
    print $value;
}
echo "</br>";
echo "</br>";

echo "13. Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą. ";
echo "</br>";
echo "</br>";

$T = [1, 2, 3, 4, 5];
$sum = 0;
foreach($T as $value){
    $sum = $sum + $value;
}
echo $sum;
?>