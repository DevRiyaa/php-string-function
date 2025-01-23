<h1>Integers</h1>
<?php
$a = 1234; 
$c = 0b11111111;
$d = 1_234_567; 
echo($a);
echo("</br>");
var_dump($a);

echo("</br>");
var_dump($c);

echo("</br>");
var_dump($d);

echo("</br>");
echo($a + $c + $d);
?>

<hr>
<h1>Floating number</h1>
<?php
 $b = 1.23; 
 var_dump($b);
?>

<hr>
<h1>String</h1>
<?php
echo("This is a simple string.");

echo("</br>");
echo('Arnold once said: "I\'ll be back."');

echo("</br>");
echo 'You deleted C:\\*.*?';

echo("</br>");
echo 'You deleted C:\*.*?';

echo("</br>");
echo 'This will not expand: \t a newline';

echo("</br>");
echo 'Variables do not $expand $either';

echo("</br>");
$foo = 1 + "-1.3e3";
echo("$foo");

echo("</br>");
$x = "Hello\nWorld";
echo $x;
?>

<hr>
<h1>String Functions</h1>
<h2>addcslashes</h2>
<?php
echo addcslashes('Riya', 'A..z');
?>

<h2>addslashes</h2>
<?php
$str = "O'Really?";
eval("echo '" . addslashes($str) . "';");
echo("</br>");
echo addslashes("$str");
?>

<h2>bin2hex</h2>
<?php
$hex = bin2hex('Hello world!');
var_dump($hex);
echo("</br>");
var_dump(hex2bin($hex));
?>

<h2>chop</h2>
<?php
$chop = "hello12345   .";
echo chop($chop);

echo("</br>");
$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str;
?>

<h2>chunk_split</h2>
<?php
for ($i = 128; $i <= 191; $i++) {
    $str = chr(240) . chr(159) . chr(144) . chr($i);
    echo $str;
}
echo("</br>");
 $data = "ABCD12";
$new_string = chunk_split($data, 4, "\r");
echo ($new_string);
?>
<hr>
<h2>convert_uuencode</h2>
<h2>convert_uudecode</h2>
<?php
$some_string = "Riya\r\nVishwakarma\r\n";

$text = convert_uuencode($some_string);
echo($text);

$some =  convert_uudecode($text);
$some =  convert_uudecode("24FEY80I6:7-H=V%K87)M80T*");
echo($some);
?>

<hr>
<h2>count_chars</h2>
<?php
$a = "Hello world!";
$a = "Hello world!";
$a = "Hello world!";
$a = "Hello world!";
$a = "Hello world!";
print_r (count_chars($a,0));
echo("</br>");
echo("</br>");
print_r (count_chars($a,1));
echo("</br>");
echo("</br>");
print_r (count_chars($a,2));
echo("</br>");
echo("</br>");
print_r (count_chars($a,3));
echo("</br>");
echo("</br>");
print_r (count_chars($a,4));
?>

<hr>
<h2>crc32</h2>
<?php
$checksum = crc32("1");
printf("%u\n", $checksum);
?>

<hr>
<h2>crypt</h2>
<?php
$text = "something";
echo crypt($text, '$2a$09$itraininginstituteaaaa$');
?>
<hr>
<?php $hello = "world";?>
<?=$hello?>
<hr>
<?php
print($hello);
?>
<hr>
<?php
($hello);
?>
<hr>
<h2>explode</h2>
<?php
$row = "col1 col2 col3 col4 col5";
$rows = explode(" ", $row);
echo $rows[1];
echo $rows[3];
?>

<hr>
<H2>get_html_translation_table</H2>
<?php
print_r (get_html_translation_table(HTML_SPECIALCHARS));
?>

<!-- <hr>
<h2>get_html_translation_table</h2>
<?php
$data = get_html_translation_table(HTML_ENTITIES);
echo("<pre>");
print_r($data);
echo("</pre>");
?> -->
<hr>
<?php
echo("<pre>");
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
echo("</pre>");
?>

<hr>
<h2>...</h2>
<?php
$str = '<a href = "http://127.0.0.1/php/language-types.php">language php</a>';
echo ($str)."<br></br>";
echo htmlentities($str, ENT_QUOTES);
?>

<hr>
<?php
$str1 = 'This is a single "String"';
echo ($str1)."<br></br>";
echo htmlentities($str1, ENT_QUOTES);
?>

<hr>
<h2>implode</h2>
<?php
$strr = ['lastname', 'email', 'phone'];
$str = ['email'];
echo implode( ' ', $strr ),' ', implode( ',', $str );
?>

<hr>
<h2>Join</h2>
<?php
$strr = ['lastname', 'email', 'phone'];
echo join( ' ', $strr );
?>

<hr>
<h2>lcfirst</h2>
<?php
$strr = "HELLO WORLD";
$str = "hello world";
echo lcfirst($strr );
echo ("</br>");
echo strtoupper($str);
?>

<hr>
<h2>levenshtein</h2>
<?php
echo ("</br>");
$strr = "d";
$str = "dddddddd";
echo levenshtein($strr, $str);
?>

<hr>
<H2>localeconv</H2>
<?php
setlocale(LC_ALL,"US");
$locale_info = localeconv();
echo ("<pre>");
print_r($locale_info);
echo ("</pre>");
?>
<hr>
<?php
setlocale(LC_ALL,"UK");
$locale_info = localeconv();
echo ("<pre>");
print_r($locale_info);
echo ("</pre>");
?>

<hr>
<h2>ltrim</h2>
<?php
$str = "             b           hello     world          u                ";
echo ltrim($str);
?>
<?php
echo ("</br>");
$text = "\t\tThese are a few words :) ....  ";
$trimmed = ltrim($text);
var_dump($trimmed);
?>

<hr>
<h2>md5</h2>
<?php
$text = "Riya";
echo convert_uuencode($text);
echo ("</br>");
echo md5($text);

echo ("</br>");
if (md5($text) === '79a2e96423130317954dd654e226dbcc') {
    echo "Would you like a green or red apple?";
}
?>

<hr>
<h2>md5_file</h2>
<?php
$text = "index.php";
echo md5_file($text);
?>

<hr>
<h2>metaphone</h2>
<?php
$text = "india";
echo metaphone($text);
?>

<hr>
<h2>nl2br</h2>
<?php
$string = "This\r\nis\n\ra\nstring\r";
echo nl2br($string);
?>

<hr>
<h2>number_format</h2>
<?php
$number = 1235.540;
$english_format_number = number_format($number);
echo ($english_format_number);
echo("</br>");
$number_format_francais = number_format($number, 3, ',', ' ');
echo($number_format_francais);
echo("</br>");
$English_format_number = number_format($number, 2, '.', '');
echo ($English_format_number);
?>

<hr>
<h2>ord</h2>
<?php
$cookie = 'University';
echo ord($cookie); 
?>

<hr>
<h2>parse_str</h2>
<?php
$str = "first=value&arr[]=foo+bar&arr[]=baz";

// Recommended
parse_str($str, $output);
echo $output['first'];  // value
echo $output['arr'][0]; // foo bar
echo $output['arr'][1]; // baz
echo("<br>");
parse_str("name=Peter",$out);
print_r( $out['name'] );
echo("<br>");
parse_str("first=riya&second=vishwakarma", $text);
print_r ($text['first']);
echo(" ");
print_r ($text['second']);
?>

<hr>
<h2>print</h2>
<?php
$str = "This string spans multiple lines. The newlines will be output as well.";
print($str);
?>

<hr>
<h2>printf</h2>
<?php
$c = 65;
printf("%%c = '%c'\n", $c);
?>

<hr>
<h2>quoted_printable_encode</h2>
<?php
$str = 'This string spans multiple lines. The newlines will be output as well.';
var_dump($str);
var_dump(quoted_printable_decode($str));
echo($strr);
// echo("<br>");
// echo quoted_printable_encode($str);
?>

<hr>
<h2>quotemeta</h2>
<?php
var_dump(quotemeta('PHP is a popular scripting language. Fast, flexible, and pragmatic.'));
?>

<hr>
<h2>rtrim</h2>
<?php

$text = "               These are a few words :) ...  ";
$trimmed = rtrim($text);
var_dump($trimmed);
?>

<hr>
<?php
$a = 20;
$b = "America";
echo sprintf("there is %u universitiy in %s.", $a, $b);
echo "</br>";
echo sprintf("there is %u universitiy in %s.", 20, 'America');

?>

<hr>
<h3>sscanf</h3>
<?php
$str = "riya,24";
sscanf($str, "%s,%s", $fn, $ln);
echo ($fn);
echo ($ln);
?>
<hr>
<?php 
	$input_string = "Riya Vishwakarma 2411"; 
	$first_name = ""; 
	$last_name = ""; 
	$number = "";
	if (sscanf($input_string, "%s %s %d", $first_name, $last_name, $number) === 3) 
	{ 
		echo "First name: " . $first_name . "</br>"; 
		echo "Last name: " . $last_name . "</br>"; 
        echo "Number: " . $number;
	} 
?>
<hr>
<?php
// get author info and generate DocBook entry
$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
echo "<author id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>\n";
?>

<hr>
<h3>str_contains</h3>
<?php
$string = "my name is Riya vishwakarma.";
if (str_contains($string, 'Riya'))
{echo "yes";}
else {
    echo "no";
}

