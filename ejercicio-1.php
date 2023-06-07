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
    $planets1 = ['mercurio', 'venus', 'tierra', 'marte', 'jupiter', 'saturno', 'urano', 'neptuno', 'pluton'];
    if (isset($_POST["activity6"])) {
        $planet = array_search($_POST["activity6"], $planets1);
        echo $planet ? "si existe": "no existe" ;
        return;
    }
    print_array($planets1);
}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 7                                */
/* -------------------------------------------------------------------------- */


function ejercicio7()
{
    $tipos  = ['fuego', 'tierra', 'agua', 'aire', 'gaseoso', 'caliente'];
    if (isset($_POST["activity7"])) {
        $planet = array_search($_POST["activity7"], $tipos);
        echo $planet ? "si existe": "no existe" ;
        return;
    }
    print_array($tipos);
}




/* -------------------------------------------------------------------------- */
/*                                ejercicios 8                                */
/* -------------------------------------------------------------------------- */


function ejercicio8()
{
    $planets1 = ['mercurio', 'venus', 'tierra', 'marte', 'jupiter', 'saturno', 'urano', 'neptuno', 'pluton'];
    if (isset($_POST["activity8"])) {
        $index_rand = rand(0, count($planets1));
        echo $planets1[$index_rand];
        return;
    }
    print_array($planets1);
}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 9                                */
/* -------------------------------------------------------------------------- */


function ejercicio9()
{
    $aliens = ['fabiola', 'yureimis', 'margot', 'yureimis'];
    if (isset($_POST["activity9"])) {
        $aliens_unicos = array_unique($aliens);
        print_array($aliens_unicos);
        return;
    }
    print_array($aliens);
}




/* -------------------------------------------------------------------------- */
/*                                ejercicios 10                                */
/* -------------------------------------------------------------------------- */


function ejercicio10()
{
    $sistemaSolar1 = ['Mercurio', 'Venus', 'Tierra', 'Marte', 'Júpiter'];
    $sistemaSolar2 = ['Venus', 'Tierra', 'Marte', 'Saturno', 'Urano'];

    if (isset($_POST["activity11"])) {
        $planetasComunes = array_intersect($sistemaSolar1, $sistemaSolar2);
        print_array($planetasComunes);
        return;
    }

    print_array($sistemaSolar1);
    echo "<br/>";
    print_array($sistemaSolar2);

}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 11                                */
/* -------------------------------------------------------------------------- */


function ejercicio11()
{
    $sistemaSolar1 = ['Mercurio', 'Venus', 'Tierra', 'Marte', 'Júpiter'];
    $sistemaSolar2 = ['Venus', 'Tierra', 'Marte', 'Saturno', 'Urano'];

    if (isset($_POST["activity11"])) {
        $planetasComunes = array_diff($sistemaSolar1, $sistemaSolar2);
        print_array($planetasComunes);
        return;
    }

    print_array($sistemaSolar1);
    echo "<br/>";
    print_array($sistemaSolar2);

}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 12                                */
/* -------------------------------------------------------------------------- */


function ejercicio12()
{
    $planets_satelite = [
        "tierra" => [],
        "saturno" => [],
        "marte" => []
    ];

    if (isset($_POST["activity12-planet"]) &&  isset($_POST["activity12-satelite"]) ) {
        array_push( $planets_satelite[$_POST["activity12-planet"]], $_POST["activity12-satelite"] );
        print_r($planets_satelite);
        return;
    }
    print_r($planets_satelite);
}



/* -------------------------------------------------------------------------- */
/*                                ejercicios 13                                */
/* -------------------------------------------------------------------------- */


function ejercicio13()
{
    $sistemaSolar1 = ['Mercurio', 'Venus', 'Tierra', 'Marte', 'Júpiter'];
    if (isset($_POST["activity13"])) {
        $sistema_revertido = array_reverse($sistemaSolar1);
        print_array($sistema_revertido);
        return;
    }
    print_array($sistemaSolar1);
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
                <small>  <?php  print_array($planets);  ?>    </small>
                <button  type="submit" >  verificar si exite </button>
                <small>   <?php  ejercicio6(); ?>   </small>
            </form>
        </article>



        <!-- ejecicio 7 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity7">
                        tipos de naves
                        <input type="text" id="activity7" name="activity7" placeholder="planeta a buscar" required>
                    </label>
                </div>

                <small> <?php   ?>  </small>
                <button  type="submit" >  verificar si exite </button>
                <small>   <?php  ejercicio7(); ?>   </small>
            </form>
        </article>



        <!-- ejecicio 8 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity8">
                        planeta aleatorio
                        <input type="text" id="activity8" name="activity8" placeholder="planeta a buscar" required>
                    </label>
                </div>

                <small> <?php   ?>  </small>
                <button  type="submit" >  generar aleatorio </button>
                <small>   <?php  ejercicio8     (); ?>   </small>
            </form>
        </article>



        <!-- ejecicio 9 -->

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity9">
                        asesina a los alienigenas duplciados
                        <input type="submit" id="activity9" name="activity9" value="elimnar" required>
                    </label>
                </div>
               
                <small>   <?php  ejercicio9(); ?>   </small>
            </form>
        </article>


         <!-- ejecicio 10 -->

         <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity10">
                        planetas comunes en sisemas solares
                        <input type="submit" id="activity10" name="activity10" value="bsucar comunes" required>
                    </label>
                </div>
               
                <small>   <?php  ejercicio10(); ?>   </small>
            </form>
        </article>


           <!-- ejecicio 10-->

           <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity10">
                        planetas comunes en sisemas solares
                        <input type="submit" id="activity10" name="activity10" value="bsucar comunes" required>
                    </label>
                </div>
               
                <small>   <?php  ejercicio10(); ?>   </small>
            </form>
        </article>


          <!-- ejecicio 11-->

          <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity11">
                        planetas unicos en sisemas solares
                        <input type="submit" id="activity11" name="activity11" value="bsucar comunes" required>
                    </label>
                </div>
               
                <small>   <?php  ejercicio11(); ?>   </small>
            </form>
        </article>

        <!-- ejecicio 12-->
        <article>
            <form method="POST">
                <div class="grid">

                    <label for="activity12-planet">
                        planeta
                        <select name="activity12-planet">
                            <option value="tierra">tierra</option>
                            <option value="saturno">saturno</option>
                            <option value="marte">marte</option>
                        </select>
                    </label>

                    <label for="activity12-satelite">
                        satelite
                        <input id="activity12-satelite" name="activity12-satelite"required>
                    </label>
                </div>
                <button  type="submit"> agregar satelite </button>   
                <small>   <?php  ejercicio12(); ?>   </small>
            </form>
        </article>

        <!-- ejecicio 13-->
        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity13">
                        revierte el orden de los planetas
                        <input type="submit" id="activity13" name="activity13" value="revierte" required>
                    </label>
                </div>
                <small>   <?php  ejercicio13(); ?>   </small>
            </form>
        </article>










    </body>
</body>

</html>