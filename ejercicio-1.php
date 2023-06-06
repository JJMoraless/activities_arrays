<?php
$planets = ['mercurio', 'venus', 'tierra', 'marte', 'jupiter', 'saturno', 'urano', 'neptuno', 'pluton'];


/* -------------------------------------------------------------------------- */
/*                                ejercicios 1                                */
/* -------------------------------------------------------------------------- */


function print_planets($planets)
{
    foreach ($planets as $key => $val) {
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

function ejercicio2($planets)
{
    if (isset($_POST["activity2"])) {
        $array = array_fill(0, $_POST["activity2"], 'Deshabitado');
        echo  $array;
        return;
    }
    echo 'no funciono';
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
        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity1">
                        planeta a buscar
                        <input type="text" id="activity1" name="activity1" placeholder="planeta a buscar" required>
                    </label>
                </div>
                <small> <?php print_planets($planets); ?> </small>
                <button type="submit">Submit</button>
                <small> <?php ejercicio1($planets); ?> </small>
            </form>
        </article>

        <article>
            <form method="POST">
                <div class="grid">
                    <label for="activity2">
                        planeta a buscar
                        <input type="text" id="activity2" name="activity2" placeholder="planeta a buscar" required>
                    </label>
                </div>
                <small> <?php print_planets($planets); ?> </small>
                <button type="submit">Submit</button>
                <small> <?php ejercicio1($planets); ?> </small>
            </form>
        </article>

    </body>




</body>

</html>