<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$planets = ['mercurio', 'venus', 'tierra', 'marte', 'jupiter', 'saturno', 'urano', 'neptuno', 'pluton'];


/* -------------------------------------------------------------------------- */
/*                                ejercicios 1                                */
/* -------------------------------------------------------------------------- */


function print_array($array)
{
    foreach ($array as $key => $val) {
        echo "$key: $val  / ";
    }
}

function ejercicio1($planets)
{
    if (isset($_POST["activity1"])) {
        array_flip($planets);
        echo $planets[$_POST["activity1"]];
        return;
    }
    echo 'no funciono';
}


/* -------------------------------------------------------------------------- */
/*                                ejercicios 2                                */
/* -------------------------------------------------------------------------- */



function ejercicio2()
{
    if (isset($_POST["activity2"])) {
        $array = array_fill(0, (int) $_POST["activity2"], 'Deshabitado');
        print_array($array);
        return;
    }
    echo 'no funciono';
}


/* -------------------------------------------------------------------------- */
/*                                ejercicios 3                                */
/* -------------------------------------------------------------------------- */

function ejercicio3()
{
    $planets= ["mercurio" => true, "venus" => false, "tierra"=> true, "marte" => true ];
    if (isset($_POST["activity3"])) {
        $filtrados = array_filter($planets,fn ($v) =>  $v == true );
        print_array($filtrados);
        return;
    }
    print_array($planets);
}




/* -------------------------------------------------------------------------- */
/*                                ejercicios 4                                */
/* -------------------------------------------------------------------------- */

function ejercicio4()
{
    $planets= ["mercurio" => 0.6, "venus" => 3.6, "tierra"=> 2.4, "marte" => 4.5 ];

    if (isset($_POST["activity4"])) {
        $earht_gravity = 9.8;
        $planets_real_gravity = array_map(fn ($v) => $v * $earht_gravity, $planets);
        print_array($planets_real_gravity);
        return;
    }
    print_array($planets);
}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 5                                */
/* -------------------------------------------------------------------------- */


function ejercicio5()
{
    $planets = [10,30,50,30,20,14,12,20];
    if (isset($_POST["activity5"])) {
        $suma_total = array_sum($planets);
        echo $suma_total;
        return;
    }
    print_array($planets);
}


/* -------------------------------------------------------------------------- */
/*                                ejercicios 6                                */
/* -------------------------------------------------------------------------- */


function ejercicio6()
{
    global $planets;
    if (isset($_POST["activity6"])) {
        $planet = array_search($_POST["activity6"], $planets);
        echo $planet ? "si existe": "no existe" ;
        return;
    }
    print_array($planets);
}





?>






<!DOCTYPE html>
<html data-theme="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><strong>Ejercicios arrays php</strong></li>
            </ul>
        </nav>
    </div>

    <body class="container">

        <!-- ejecicio 1 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity1">
                        planeta a buscar
                        <input type="text" id="activity1" name="activity1" placeholder="planeta a buscar" required>
                    </label>
                </div>
                <small> <?php print_array($planets); ?> </small>
                <button type="submit">Submit</button>
                <small> <?php ejercicio1($planets); ?> </small>
            </form>
        </article>

        <!-- ejecicio 2 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity2">
                        crear sistema solar
                        <input type="text" id="activity2" name="activity2" placeholder="numero de planetas" required>
                    </label>
                </div>
                <small>  </small>
                <button type="submit">Submit</button>
                <small> <?php  ejercicio2(); ?> </small>
            </form>
        </article>


        <!-- ejecicio 3 -->

        <article>
            <form method="POST">
                <div class="grid">
                </div>
                <small>  </small>
                <small> <?php  ejercicio3(); ?> </small>
                <input  name="activity3" type="submit"  value="filtrar planetas habitados" ></input>
                
            </form>
        </article>

        <!-- ejecicio 4 -->

        <article>
            <form method="POST">
                <input  name="activity4" type="submit"  value="calcular gravedad real" ></input>
                <small>   <?php  ejercicio4(); ?>   </small>
            </form>
        </article>

          <!-- ejecicio 5 -->

        <article>
            <form method="POST">


                <small>  estas son las masas de cada nave  </small>
                <input  name="activity5" type="submit"  value="calcula  la masa total: " ></input>
                <small>   <?php  ejercicio5(); ?>   </small>
            </form>
        </article>


        <!-- ejecicio 6 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity6">
                        planeta a buscar
                        <input type="text" id="activity6" name="activity6" placeholder="planeta a buscar" required>
                    </label>
                </div>
                <small>    </small>
                <input  name="activity6" type="submit"  value="calcula  la masa total: " ></input>
                <small>   <?php  ejercicio6(); ?>   </small>
            </form>
        </article>


        


    </body>




</body>

</html>