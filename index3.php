
<?php
echo "1.Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras. ";
echo "<br>";
echo "<br>";

function NumberSquere($v) {
    return $v*$v;
}

echo NumberSquere(2);

echo "<br>";
echo "<br>";


echo " funkcija gražina skaičių pakeltą nurodytu laipsniu";


echo "<br>";
echo "<br>";


echo pow(2,4);

echo "<br>";
echo "<br>";


echo "2. Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus. ";


echo "<br>";
echo "<br>";

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo "Skaičių suma yra = ";  echo addNumbers(5,5);

echo "<br>";
echo "<br>";

echo "3. Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio. ";

function ABD(int $a, int $b, int $c ) {
    return ($b-$a)/$c;
}
echo "<br>";
echo "<br>";

echo ABD(2, 3, 1);

echo "<br>";
echo "<br>";

echo "4. Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba. ";

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
<br>
<br>

<form action="index3.php" method="post">
    <Strong>Įveskite skaičių nuo 1 iki 7 </Strong>  <input type="text" name="name"> <button>Paspausti</button>
</form>
<form action="" method="post">


    <?php
    echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"];
    ?>

<br>
<br>
<br>
<br>
<br>

function wday (n){
let week_day =['Pirmadienis','Antradienis','Trečiadienis','Ketvirtadienis','Penktadienis','Šeštadienis', 'Sekmadienis'];
if (n<1||n>7){return 'Tokios savaitės dienos nėra'}
return week_day[n-1];
};

//Funkcija, kuri tikrina ar įvedami duomenys teisingi
function CheckInput (inputs){
if (inputs.length>0){
for (let i = 0;i<inputs.length;i++){
if (inputs[i] == null||inputs[i]==undefined||isNaN(inputs[i])){return false}
}
return true;
}
return false;
};

//Kai įvesti neteisingi duomenys
function WrI(){
document.write('Wrong inputs!<hr>');
}


