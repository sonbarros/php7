<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

/* resultado   FONTE: w3school
Today is 2018/04/12
Today is 2018.04.12
Today is 2018-04-12
Today is Thursday
*/

/*
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
*/
?>


<?php
echo "The time is " . date("h:i:sa");

/* resultado
The time is 04:18:48pm
*/

/*
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/
?>

<?php
// Obtenha seu fuso horário

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<?php
// Criar uma data com PHP mktime ()
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
// Converte uma string para data 
$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

// PHP é bastante inteligente sobre a conversão de uma string para uma data, 
// assim você pode colocar em vários valores:

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>


