<?php
/* Seccion 1 */

/* variables, constantes, comillas simples y dobles */

print 'hola mundo'; // print regresa int, solo una cadena
echo "\nEjemplo \nganar mucho\$$", "otra cadena\n"; // es void, varias cadenas

$name = "Hafid"; // definicio de variable
echo "\nHola $name\n"; // comillas dobles se puede usar variables dentro

echo '\nhola $name'; // lo que ves es lo que obtienes

/* sintaxis heredoc y nowdoc */

//heredoc similar a comillas dobles
echo <<<FRASE
"\n\nHola" $name\n
'YCSYCG'
FRASE;

//heredoc similar a comillas simples YCSYCG
echo <<<'OFRASE'
"\n\nHola" $name\n
'YCSYCG'
OFRASE;

/* Conversion de tipo de dato */

// variable dinamica
$price = 2920.50;
$age = 12;
$name= 'Hafid';
$isDog = true;

$price = (int)$price; // forzar a un tipo
$isDog=intval($isDog);
$price=strval($price);

var_dump($price); 

// saber el tipo con funcion gettype
echo "price es del tipo: ", gettype($price),"\n";
echo "age es del tipo: ", gettype($age),"\n";
echo "name es del tipo: ", gettype($name),"\n";
echo "isDog es del tipo: ", gettype($isDog),"\n";

/* concatenacion e interpolacion */

$word1 = 'Hafid';
$word2 = 'aprendiendo PHP';

// concatenar
echo 'Hola '.$word1.' bienvenido'."\n";

//interpolacion
echo "Hola {$word1}o ya estas {$word2} profesional";

/* Extraer y buscar */

echo substr("Hafid Oxte D", 6, 4); // arg1 cadena, arg2 donde comeinza, arg 3 long
echo substr("Hafid Oxte Dzul", -4); // para el final la log en negativo

$myString = 'Bienvenido al mundo de la programacion';
$findMe = 'a';
echo strpos($myString, $findMe, 12); // arg1 string, arg2 busca, regresa pocicion, arg// de donde comienza a buscar

/* Reemplazo y formateo */

$search= ' ';
$replace = ':';
$text = '91 75 1A 9A C7';
str_replace($search, $replace, $text, $conunt); // arg4 numero de coincidencias encontradas
echo $conunt;

$arg1= 1994;
$arg2= 'PHP';
$text= 'En %d fue creado %s'; // %d tipo entero, %s tipo string
echo sprintf($text, $arg1, $arg2); // se puede cambiar el orden dentro del $text "En %2%s fue creado %1%d; %2 posicion 2

/* PCRE Expreciones regulares */

$text= 'hooola mundo en 123';
// /^hola/ para saber si la exprecion se encuentra al inicio
// /hola$/ buscar al final
// /hola$/i para quitar lo sensible a mayusculas y minusculas 
// /h[aeio]la$/i para saber si existe algun caracter dentro de los parentcis
// /h[a-d]la$/i para limitar en rango
// /Hol(a|o)/ puede terminar en a u o
$text2 = 'Los numero son 1 4 5 6';
// /[0-9]/ 
$regex='/[0-9]/'; // es lo mismo si solo ponemos \d solo numeros buscar como secuencias escapadas
$regex2 = '/\D/'; // todo lo demas menos numeros 
echo preg_match($regex, $text);

//'/[A-Za-z0-9_]/' varios rangos unidos se excluyen valores alfanumericos como # *, es lo mismo de \w
// si queremos lo contrario, es decir solo alfanumericos es con \W
// '/12\/12\/12/' para poder usar slash
echo preg_match_all($regex2, $text2, $matches);
print_r($matches);
$regex3 = '/ho*la/'; // para metadatos repetidos * hoooola retornara 1 si es 0 o mas concurrencias
// /ho+la/ 1 o mas concurrencias cerradura de klin positiva
// /ho?la/ true solo si encuentra 0 o 1 concurrencia
// /ho{4}la/ true solo si cumple con 4 o's
// /ho{2,}la/ true si es 2 o mas o's
// /ho{2,4}la/ 
echo preg_match($regex3, $text);

// '/([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})/' //exprecion para la fecha 12/12/12 o 12-12-12

?>