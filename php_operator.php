<h3>equal operator ==</h3>
<?php
$a = 30;
$b = 30;
echo ($a == $b);
?>

<h3>not equal to operator !=</h3>
<?php
$a = 3;
$b = 30;
echo($a != $b);
?>

<h3>equal value and equal type ===</h3>
<?php
$a = 30;
$b = 30;
echo($a === $b);
if ($a === $b){
    echo("true");
}
else {
    echo("false");
}
?>

<h3>equal value and equal type <=> </h3>
<?php
$a = 3;
$b = 30;
echo($a <=> $b)."</br>";
$a = 10;
$b = 10;
echo($a <=> $b)."</br>";
$a = 10;
$b = 3;
echo($a <=> $b);
?>

<h3>not equal < ></h3>
<?php
$a = 30;
$b = 0;
echo($a <> $b);
?>

<h3>not equal value or type !== </h3>
<?php
$a = 30;
$b = [30];
echo($a !== $b);
var_dump($b);
?>

<h3>Greater than or equal >= </h3>
<?php
$a = 30;
$b = 0;
echo($a >= $b);
?>

<h3>Less than or equal <= </h3>
<?php
$a = 30;
$b = 0;
echo($a <= $b);
?>
