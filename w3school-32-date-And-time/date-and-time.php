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
?>



