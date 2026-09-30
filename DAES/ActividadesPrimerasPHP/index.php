
// Ejercicio 1
<?php 
    echo "Distancia de la tierra al sol: 149 * 10^6 km";
    echo "Distancia de pluton al sol: 5,9064 * 10^9 km";
    echo "El diametro del Sol: 1.3927 * 10^6 km";
?>

//Ejercicio 2
<?php 
    $octal = 1735;
    $decimal = 989;
    $hexadecimal = "3DD";
    $binario = "1111101101";
?>

//Ejercicio 3
<?php 
    $numBits = ((((16*1000))*1000)*1000)*8;
    $poblacionTierra = 8*10^9;
    $tamanioVirus = 2*10;
    echo "<h5> El numero de bits en 16GB es: " . $numBits . " bits </h5>";
    echo "La poblacion de la tierra es: " . $poblacionTierra;
    echo "El tamaño de algun virus es: " . $tamanioVirus;
?>

//Ejercicio 4
<?php 
    echo "\"Mi primer, y nio unico, eejrcicio \"";
?> 

//Ejercicio 5
<?php 
    $nombre = "Ivan";
    echo "¡Hola $nombre! El $nombre es el nombre de usuario asigando a la variable";
?>

<?php 
//Ejercicio 6
    $nombreMadre = "Pilar";
    print("<h4>El nombre de mi padre/madre es: $nombreMadre </h4>");
?>

<?php
    #Ejercicio7
    $cuenta = ((3+2)/(2*5))**2;
    print("<h4> La solucion es: $cuenta </h4>")
?>

<?php
//Ejercicio 8 
    $a = 3.5;
    $b = 6;
    $c = 4.25;
    $cuenta = (($a<+2)/(2*$b))*(($c-4)/($a/$c))**2;

    print("<h4> La cuenta da esto: $cuenta </h4>");
?>

<?php
    //Ejercicio9
    $horasTrabajador1 = 20;
    $horasTrabajadas2 = 35;
    $valorHora = 6;
    $salario1 = $horasTrabajador1*$valorHora;
    $salario2 = $horasTrabajadas2*$valorHora; 

    print("Las horas del trabajador 1 han sido $salario1 y el del segundo trabajador son $salario2");
?>

<?php
    //Ejercicio 10
    $numPos = 5;
    $cuenta = ($numPos * ($numPos+1))/2;
    print("<h4>La cuenta sale: $cuenta </h4>");
?>

<?php 
    //Ejercicio11
    $peso = 70;
    $numOnzas = 70*28.3495;
    print("<h4>El numero de onzas es: $numOnzas </h4>");
?>

<?php 
    //Ejercicio 18
    $numMuñ = 10;
    $numCoches = 13;
    $pesoOnzas = 4*0.028;
    $pesoLibras = 2*0.453;

    $numKg = (($numMuñ*$pesoOnzas) + ($numCoches*$pesoLibras));
    
    print("<h4> el peso total del paquete es: $numKg </h4>");
?>

<?php 
    //Ejercicio 20
    $numRandom = random_int(1,20);
    if($numRandom%2 == 0){
        print("<h4> El numero $numRandom es par</h4>");
    } else{
        print("<h4> El numero $numRandom es impar</h4>");
    }

?>

<?php 
    //Ejercicio 21
    $edadUsuario = 19;
    if($edadUsuario>=18){
        print("EL usuario es mayor de edad <br>");
    } else{
        print("El usuario no es mayor de edad <br>");
    }
?>

<?php 
    //Ejercicio 22
    $personasAdultas = 4;
    $niños = 6;
    $cuenta = ((($personasAdultas * 70) + ($niños*20)*1000)*453.59);

    if($cuenta>=1000){
        print("$cuenta");
        print("Deben dividirse en dos viajes");
    } else{
        print("$cuenta");
        print("Pueden ir juntas");
    }
    print("<br>");
    print("<br>");
    
?>

<?php 
    //Ejercicio 23
    $numRandomAnios = random_int(0,90);
    print("$numRandomAnios ");

    switch ($numRandomAnios){
        case ($numRandomAnios >=0 && $numRandomAnios <= 3):
            print("Infancia");
            break;
        case ($numRandomAnios >=4 && $numRandomAnios <= 11);
            print("Infantil");
            break;
        case ($numRandomAnios >=12 && $numRandomAnios <=20);
            print("Adolescente");
            break;
        case ($numRandomAnios >=21 && $numRandomAnios <=65);
            print("Adulto");
            break;
        default:
            print("Tercera Edad");
            break;
    }

    print("<br>");

?>

<?php 
    //Ejercicio 24
    $nombreUsuario = "Ivan";
    $numVeces = 5;
    for($i = 0;$i<$numVeces; $i++){
        print("\n $nombreUsuario");
    }

        print("<br>");

?>

<?php 
    //Ejercicio 25
    $nombreUsuario = "Optimus";
    $longuitud = strlen($nombreUsuario);

    print("El nombre $nombreUsuario tiene $longuitud letras");
            print("<br>");

                    print("<br>");


?>

<?php 
    /*Crea un script PHP que asigna a tres variables números enteros aleatorios y los
muestra en orden ascendente. Además mostrará también si la generación aleatoria
fue en orden. */
    $num1 = random_int(0,10);
    $num2 = random_int(0,10);
    $num3 = random_int(0,10);

    $mayor = 0;
    $menor = 0;
    $medio = 0;

    if($num1<$num2 && $num1< $num3){
        $mayor = $num1;
        if($num2<$num3){
            $medio = $num2;
            $menor = $num3;
        } else{
            $menor = $num2;
            $medio = $num3;
        }        
    } elseif ($num2<$num1 && $num2<$num3){
        $mayor = $num2;
        if($num1<$num3){
            $medio = $num1;
            $menor = $num3;
        } else{
            $menor=$num1;
            $medio=$num3;
        }
    } else{
        $mayor=$num3;
        if($num1<$num2){
            $medio=$num1;
            $menor=$num2;
        } else{
            $menor=$num1;
            $medio = $num2;
        }
    }

    print("Los numeros de menor a mayor son: $mayor, $medio, $menor");
                        print("<br>");

                                            print("<br>");

?>

<?php 
    //Ejercicio 28
    $x = 3;
    $n = 8;
    $resultado = 1;

    for($i=0; $i<$n; $i++){
        $resultado = $resultado*$x;
    }

    print("El resultado de $x elevado a $n es: $resultado");
                                                print("<br>");
                                            print("<br>");


?>

<?php 
    //Ejercicio 29
    $nombre = "Ivan";
    $edad = random_int(1,99);
    $sueldo = random_int(0,2000);

    print("edad: $edad");
    print("sueldo $sueldo");

    if($edad <=16 && $sueldo <=1000){
        print("$nombre tiene que pagar impuestos");
    }else{
        print("$nombre no tiene que pagar impuestos");
    }

?>

<?php 
    $num1 = 5;
    $num2 = 4;
    $producto = 0;
    for($i=0;$i<$num2; $i++){
        $producto = $producto+$num1;
    }

    print("<br>Este es el producto de la multiplicacion $producto");
                                                    print("<br>");

?>

<?php 
    //Ejercicio 31
    /*17 es mayot que 5, lo esto se queda 12 y sumo uno al cociente
    12 es mayor que 5, si, 12 menos 5 =7, sumamos otro al cociente, 
    7 es mayor que 5, quedan 2 y sumo otro cociente, cociente=3
    2 es mayor que 5, no, resto es 2 y cociente 3*/
    $dividendo = 17; 
    $divisor = 5; 
    $cociente = 0; 
    $resto = $dividendo; 
    while ($resto >= $divisor) { 
        $resto = $resto - $divisor; 
        $cociente++; 
    } 
    print("Cociente: $cociente<br>"); 
    print("Resto: $resto <br>");
?>

<?php 
    /*Crear un script PHP que muestre la tabla de multiplicación de un número entero
positivo entre 1 y 10 obtenido aleatoriamente. */
    $numeroRandom = random_int(0,10);
    print("La tabla de multiplicar de $i es:");
    for($i=1;$i<=10;$i++){
        $resultado = $i*$numeroRandom;
        print(",$numeroRandom x $i: $resultado, ");
    }
    print("<br>");

?>

<?php 
    //Ejercicio 33
    $capital = 1_000_000;
    $interes = 4;
    $anios = 1;
    for($i=1;$i<=$anios;$i++){
        $operacion = ($capital*$interes) / 100;
        $capital += $operacion;
    }

    print("El Capital que vas a tener en $anios años es: $capital €");
    print("<br>");
?>

<?php 
    //Ejercicio 34
    $num1 = 10;
    $num2 = 7;
    print("multiplos de $num1 menores que $num2 son: ");
    for($i=$num1; $i>=1;$i--){
        if($i<=$num2) print("$i,");
    }
    print("<br>");
?>

<?php 
    //Ejercicio 35
    $factorial = 1;
    $num1 = 5;
    print("Los factoriales de $num1 son: ");
    for($i=$num1; $i>0;$i--){
        print("$i, ");
        $factorial *=$i;
    }

    print("El resultado es: $factorial");
        print("<br>");

?>

<?php
    // Ejercicio: generar un color aleatorio

    $rojo = rand(0, 255);
    $verde = rand(0, 255);
    $azul = rand(0, 255);

    /*sprintf funciona para hacer texto con un formato determinado
    En nuestro caso lo usamos para hacer una plantilla de color en hexadecimal
    el %02X indica que:
        % es para indicar que empezamos un formato
        0 es para decir que se aaden 0 delante si hace falta
        2 es apra decir que al menos tenemos que tener 2 caracteres
        X para indicar que el número se convierte a hexadecimal usando letras mayúsculas*/
    $color = sprintf("#%02X%02X%02X", $rojo, $verde, $azul);

    print("<body style='background-color: $color; color: white;'>");
    print("Este es el color generado aleatoriamente");
    print("</body>");

        print("<br>");

?>

<?php 
    //Ejercicio 43
    $frase = "Ivan es guapo";
    $fraseInvertida = "";
    for($i=strlen($frase)-1; $i>=0; $i--){
        $fraseInvertida = $fraseInvertida . $frase[$i];
    }
    print($fraseInvertida);
            print("<br>");


    /*$frase = "Ivan es guapo";
    $fraseInvertida = strrev($frase);
    print($fraseInvertida);*/
?>

<?php 
            print("<br>");

    //Ejercicio 44
    $num1 = 220;
    $num2 = 284;
    
    $divisoresNum1 = array();
    $divisoresNum2 = array();
    $sumaDivisoresNum1 = 0;
    $sumaDivisoresNum2 = 0;

    for($i=$num1; $i>=1; $i--){
        if($num1%$i == 0){
            $divisoresNum1[] = $i;
        }
    }

    for($i=$num2; $i>=1; $i--){
        if($num2%$i == 0){
            $divisoresNum2[] = $i;
        }
    }

    foreach($divisoresNum1 as $numeros){
        print("$numeros, ");
        $sumaDivisoresNum1 += $numeros;
    }
                print("<br>");

    foreach($divisoresNum2 as $numeros2){
        print("$numeros2, ");
        $sumaDivisoresNum2 += $numeros2;
    }
    print("<br>");
        
    print("Suma de divisores de $num1 = $sumaDivisoresNum1 </br>");
    print("Suma de divisores de $num2 = $sumaDivisoresNum2 </br>");
    if($sumaDivisoresNum1 == $sumaDivisoresNum2) print("Los numeros son amigos");
    else print("No son amigos");
        print("<br>");

?>

<?php 
    //Ejercicio 45
    $nombreUSuario = "Ivan";
    $apellido = "Padilla";
    $nombreMay = strtoupper($nombreUSuario);
    $nombreMin = strtolower($nombreUSuario);

    print($nombreMay );
    print(" ".$nombreMin );
    strtoupper($nombreUSuario[0]);
    strtoupper($apellido[0]);

    print(" $nombreUSuario $apellido");
?>


