<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="introCSS.css">
    <link rel="stylesheet" href="BasicCSS.css">
    <link rel="icon" href="images/Logo.png">
    <title>Enlaces HTML</title>
</head>
<body style="background-color: #f876de;
    background-image: linear-gradient(315deg, #f876de 0%, #b9d1eb 74%);">
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
    <div class="infRight" style="background-color: #c7e9fb;
background-image: linear-gradient(315deg, #c7e9fb 0%, #e61d8c 74%);">
        <h1>HTML Tutoriales</h1>
        <a href="Comenzar.php"><input type="button" value="HTML Principio"></a><br>
        <a href="intro.php"><input type="button" value="HTML Introduccion"></a><br>
        <a href="Editors.php"><input type="button" value="HTML Editores"></a><br>
        <a href="Basic.php"><input type="button" value="Basico HTML"></a><br>
        <a href="Enca.php"><input type="button" value="Encabezados HTML"></a><br>
        <a href="Par.php"><input type="button" value="Parrafos HTML"></a><br>
        <input type="button" value=""><br>
        <input type="button" value=""><br>
   
    <div class="info">
        <center>
        <h1>Enlaces HTML - Hipervinculos</h1>
        <a href="par.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="#"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
        </center>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
       <p class="info1">Los enlaces se encuentran en casi todas las páginas web. Los enlaces permiten a los usuarios hacer clic en su camino de una página a otra.</p>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <font style="text-align: justify;">
    <p class="info1">Los enlaces HTML son hipervínculos. <br><br>
    Puede hacer clic en un enlace y saltar a otro documento. <br><br>
    Cuando mueva el mouse sobre un enlace, la flecha del mouse se convertirá en una pequeña mano.</p>
    <p class="info1" style="background-color: coral;">Nota: un enlace no tiene que ser texto. ¡Un enlace puede ser una imagen o cualquier otro elemento HTML!</p>
       <p class="info1">Los enlaces HTML se definen con la etiqueta &#60;a></p>
    </font>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>Enlaces HTML - Sintaxis</h2>
    <font style="text-align: justify;">
    <p class="info1">La etiqueta HTML <u style="color: red;">&#60;a></u> define un hipervínculo. Tiene la siguiente sintaxis:</p>
    </font>
    <div class="codebox" style="height: 150px;">
            <p>&nbsp;Ejemplo:</p>
                 <div class="code" style="height: 50px; width:fit-content;">
                  <textarea disable="true" style="width: 760px; height: 80px;" >
                <?php
                echo '
              <font style="font-size:25px;">  <a href="url">Texto del enlace</a> </font>'
                ?>
            </textarea>
        </div>
    </div><br>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNEEIXVEOM4" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br>
   <font style="text-align: justify;">
   <p class="info1">El atributo más importante del elemento <u style="color: red;">&#60;a></u>  es el atributo <font style="color: red;">href=""</font>, que indica el destino del enlace. <br><br>
    El texto del enlace es la parte que será visible para el lector. <br><br>
    Al hacer clic en el texto del enlace, el lector se enviará a la dirección URL especificada.</p>
    <div class="codebox" style="height: 150px;">
            <p>&nbsp;Ejemplo:</p>
                 <div class="code" style="height: 50px; width:fit-content;">
                  <textarea disable="true" style="width: 760px; height: 80px;" >
                <?php
                echo '
<a href="https://metcashew.github.io/Carousel-de-juegos-retro/">Este es un enlace</a>'
                ?>
            </textarea>
        </div>
    </div><br>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNEEIXVEOM4" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br>


    
<hr style="height:2px;border-width:0;color:gray;background-color:gray">  
        <br><br>
        <center>
        <a href="Basic.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="·"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    </div>
    </div>
    </div>
    
</body>
</html>