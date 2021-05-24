<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ComStyles.css">
    <link rel="stylesheet" href="Ejer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="icon" href="images/Logo.png">
    
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
<div class="code" >
            <center>
            <h3>Ejercicio:</h3>
            <p>Agrega lo que falta al codigo:</p>
            </center>
                <div style="color: white; font-size: 18px;">
                        <center>
                    <?php
                    $cor1 = $_POST["prf1"];
                    $respuesta1 = "<p>Hola mundo</p>";
                    $respuesta2 = "<p>hola mundo</p>";
                    $respuesta3 = "<P>Hola mundo</P>";
                    $respuesta4 = "<P>hola mundo</P>";

                        if ($respuesta1 == $cor1 or $respuesta2 == $cor1 or $respuesta3 == $cor1 or $respuesta4 == $cor1){
                            echo '<h2 style="color: green; ">Correcto</h2>';
                            echo " 
                            &#60;html> <br>
                        &#60;body> <br> <br>    
                        &#60;p>Hola Mundo&#60;/p> <br><br>
                        &#60;/html> <br>
                        &#60;/body> <br> 
                            <br>";
                        }else {
                            echo '<h2 style="color: red; ">Incorrecto</h2><br>';
                            echo '<p style="font-size: 30px;"> Intenta de nuevo</p>';
                        }

                    ?>
                    </center>
                </div>
        </div>
        <a href="Par.php"><input style="background-color: #8ae9b3;
background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);
    " class="btnRe"type="button" value="Regresar"></a>
    </div>
</div>
</center>
</body>
</html>