<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ComStyles.css">
    <link rel="stylesheet" href="Ejer.css">
    <link rel="stylesheet" href="header.css">
    
    <title>Document</title>
</head>
<body style="background-color: sandybrown;">
<header style="background-color: whitesmoke;">
        <nav class="nav">
            <a href="index.html"><img src="images/Logo.png" width="50px" height="50px" style="position: relative; left: 100px;" ></a>
            <div class="header">
            <a href="index.html" style="color: green;">Inicio</a>
            <a href="#" style="color: green;">Sobre nosotros</a>
            <a href="https://aprendehtml-prototipo.blogspot.com/2021/05/metodologia-de-prototipo.html" style="color: green;">Blog</a>
            </div>
        </nav>
    </header>
    <center>
<div class="code">
            <center>
            <h3>Ejercicio:</h3>
            <p>Agrega lo que falta al codigo:</p>
            </center>
                <div style="color: white; font-size: 18px;">
                        <center>
                    <?php
                    $cor1 = $_POST["enc1"];
                    $cor2 = $_POST["enc2"];
                    $respuesta1 = "<h1>";
                    $respuesta2 = "</h2>";
                        if ($respuesta1 == $cor1 && $respuesta2 == $cor2){
                            echo '<h2 style="color: green; ">Correcto</h2>';
                            echo " 
                            <br><br>
                            &nbsp; &#60;h1&#62; este es un encabezado &#60;/h1> <br><br><br>
                            &nbsp;&#60;h2> este es otro Encabezado &#60;/h2&#62; <br><br><br>";
                        }else {
                            echo '<h2 style="color: red; ">Incorrecto</h2><br>';
                            echo "<p>Intenta de nuevo</p>";
                        }

                    ?>
                    </center>
                </div>
        </div>
        <a href="Basic.php"><input style="background-color: #8ae9b3;
background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);
    " class="btnRe"type="button" value="Regresar"></a>
    </div>
</div>
</center>
</body>
</html>