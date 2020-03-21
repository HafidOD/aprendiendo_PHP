<?php
/* Operadores de comparacion */

$age = '18';

echo var_dump($age <= 18);

/*
== igualdad
echo var_dump($age == 18);

=== identico (igual en tipo y valor)
echo var_dump($age === 18); 

!= diferente (tambien se puede usar <>)
echo var_dump($age != 18);
echo var_dump($age <> 18);

!== no identico
echo var_dump($age !== 18);

> mayor que
echo var_dump($age > 18);

< menor que 
echo var_dump($age < 18);

>= mayor o igual
echo var_dump($age >= 18);

<= menor o igual
echo var_dump($age <= 18);

<=> nave espacial (regresa un valor int donde -1 es menor que, 1 es mayor que, 0 es igual)
echo var_dump($age <=> 18);
*/

/* Operadores Aritmeticos */

$op1 = 2;
$op2 = 3;

$result = $op1 ** $op2;
echo $result;

/*
+ adicion
$result = $op1 + $op2;

- sustraccion
$result = $op1 - $op2;

* multiplicacion
$result = $op1 * $op2;

/ divicion
$result = $op1 / $op2;

% modulo
$result = $op1 % $op2;

** exponente
$result = $op1 ** $op2;
*/

/* Operadores de asignacion */

$a = 15;
$b = 5;

/*
= asignacion
$a = 15;
$a+=b; // $a = $a + $b; // se pueden usar con los diferentes operadores aritmeticos

&= referencia
$b =& $a; //(b siempre va a tomar el valor de a, sin importar que cambiemos el valor de a)
echo $a;
echo $b;
$a = 20;
echo $a;
echo $b; // b vale 20 sin tener que reasignar $b = $a;
*/

/* Operadores logicos */
$asistencia = 5;
$promedio = 8;
$result = !($promedio >= 8);

echo var_dump($result);

/*
&& operador y
$result = ($promedio >= 8 && $asistencia >= 6);

|| operador O
$result = ($promedio >= 8 || $asistencia >= 6);

! operador not
$result = !($promedio >= 8);

AND, OR, XOR (diferencia entre &&, || es a precedencia, es decir, jerarquia, estos son los ultimos en la jerarquia)
$result = ($promedio >= 8 xor $asistencia >= 6);
$result = ($promedio >= 8 or $asistencia >= 6);
$result = ($promedio >= 8 and $asistencia >= 6);
*/

/* Operadores de incremento y decremento */

$a=5;
echo 'pre incremento'.++$a;
echo "\nresultado $a";

/*
pre incremento // se incrementa antes y despues devuelve el valor de la variable
echo 'pre incremento'.++$a;

post incremento
echo 'pre incremento'.$a++; // regresa el valor de la variable y luego incrementa

pre decremento
echo 'pre incremento'.--$a;

post decremento
echo 'pre incremento'.$a--;
*/

/* Operadores ternario, elvis y fusion null */
$age;
echo $age ?? 'No hay edad';

/*
operador ternario
(expresion bool) ? expresion : expresion (si es true regresa ela primera expresion, si el false regresa la segunda expresion)
echo ($age>=18) ? 'Eres mayor de edad' : 'Eres menor de edad';

operador elvis
expresion ?: expresion
echo $age ?: 'No hay edad'; (si la variable tiene algun valor regresa el valor, sino regresa la expresion)

operador fusison null (si es null regresa la expresion)
echo $age ?? 'No hay edad';
echo isset($age)?: 'No hay edad'; // con el operador elvis se tendria que agregar isset() para que no marque error si a variable no tiene ningun valor
*/

?>