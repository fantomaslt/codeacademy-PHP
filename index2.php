
<h1>Namu darbai 2 </h1>

<?php
echo "1. Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.";

echo "</br>";
echo "</br>";

$arrr = array("a","b","c");


var_dump($arrr);
echo "</br>";
print_r(array_values( $arrr ));

echo "</br>";
echo "</br>";

echo "2. Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.";

echo "</br>";
echo "</br>";

echo "pirmas elementas  " ; var_dump($arrr[0]);
echo "</br>";
echo "pirmas elementas  " ; echo $arrr[0];
echo "</br>";
echo "antras elementas  " ; var_dump($arrr[1]);
echo "</br>";
echo "antras elementas  " ; echo $arrr[1];
echo "</br>";
echo "trecias elementas  " ; var_dump($arrr[2]);
echo "</br>";
echo "trecias elementas  " ; echo  $arrr[2];


echo "</br>";
echo "</br>";

echo "3. Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d";

echo "</br>";
echo "</br>";
$ARR = array("a","b","c","d");

echo $ARR[0]. " + ". $ARR[1]. ", " .$ARR[2]. " + " . $ARR[3];

echo "</br>";
echo "</br>";

echo "4. Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus,\r\n 
 priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.";

echo "</br>";
echo "</br>";

$new = array("2","5","3","9");
$rez = $new[0] * $new[1] + $new[2] * $new[3];
echo $rez ;

echo "</br>";
echo "</br>";

echo "5. Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.";

echo "</br>";
echo "</br>";

$obj = array("a" => "1", "b" => "2", "c" => "3");
echo "elemento c reikšmė yra "; echo $obj['c'];

echo "</br>";

echo "elemento c reikšmė yra "; print_r($obj['c']);

echo "</br>";
echo "</br>";

echo "6. Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną";

echo "</br>";
echo "</br>";

$weekdays = array(
    "1" => "pirmadienis",
    "2" => "antradienis",
    "3" => "trečiadienis",
    "4" => "ketvirtadienis",
    "5" => "penktadienis",
    "6" => "šestadienis",
    "7" => "sekmadienis");
$day =  date('w') ;


echo "Šiandien yra: "; print_r($weekdays[$day]);

echo "</br>";
echo "</br>";

echo "7. Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.";
echo "</br>";
echo "</br>";

$NEW = array([1, 2, 3], [4, 5, 6], [7,8,9]) ;

echo $NEW[1][0];

echo "</br>";
echo "</br>";

echo "8. Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.";

echo "</br>";
echo "</br>";

$object =array( "js" => ["jQuery", "Angular"], "php"=>"hello", "css"=>"world");

echo $object["js"][0];

echo "</br>";
echo "</br>";

echo "8. Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
 Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.";
echo "</br>";
echo "</br>";
$WEEKDAYS = array(
    "LT" => ["sekmadienis","pirmadienis","antradienis","trečiadienis","ketvirtadienis","penktadienis", "šeštadienis"],
    "EN" => ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"]
);

echo " Lietuviškai = "; echo $WEEKDAYS["LT"][1];


echo "</br>";
echo "</br>";

echo " Angliškai = "; echo $WEEKDAYS["EN"][3];


echo "</br>";
echo "</br>";

echo  "9.Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną" ;
echo "</br>";
echo "</br>";

$lang = array("LT"=> $WEEKDAYS["LT"],"EN"=>$WEEKDAYS["EN"]);
$day =  date('w') ;

echo $lang["LT"][$day];  // kodel rodo neteisingai ?
echo "</br>";
echo $lang["EN"][$day];

?>








<!--<ul>-->
<!--    <li>Name: --><?php //echo $web_site[‘Name’]; ?><!--</li>-->
<!--    <li>URL: --><?php //echo $web_site[‘URL’]; ?><!--</li>-->
<!--    <li>Purpose: --><?php //echo $web_site[‘Purpose’]; ?><!--</li>-->
<!--</ul>-->