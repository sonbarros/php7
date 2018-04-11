<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";   

// OU podemos associar manualmente, abaixo.

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";  
    
?>

<?php

// Contando a quantidade de itens no array
echo count($cars);

?>

<?php

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// laço de repetição para array indexado
?>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

// laço de repetição para array associativo
?>

