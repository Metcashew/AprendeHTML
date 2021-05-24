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
    <title>HTML Introduccion</title>
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
        <input type="button" value=""><br>
        <input type="button" value=""><br>
        <input type="button" value=""><br>
        <input type="button" value=""><br>
   
    <div class="info">
        <center>
        <h1>HTML Basico</h1>
        <a href="Editors.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Enca.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
        </center>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2>Documentos HTML</h2>
        <p class="info1">Todos los documentos HTML deben comenzar con una declaración de tipo de documento: &#60;!DOCTYPE html>.</p>
        <p class="info1">El documento HTML en sí comienza con &#60;html> y termina con &#60;/html>.</p>  
        <p class="info1">La parte visible del documento HTML está entre &#60;body> y &#60;/body>.</p> 
        <div class="Ejer2" style="bottom: -700px; height: 250px;">
            <img src="images/htmllogo.png" width="250px">
        </div> 
        <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo "
                <!DOCTYPE html>
                <html>
                <head>
                <title>Titulo de Pagina</title>
                </head>
                <body>
                
                <h1>Este es un encabezado</h1>
                <p>Este es un parafo</p>
                
                </body>
                </html>"
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQHB8IP0WRSP" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
<br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>La declaración &#60;!DOCTYPE></h2>
    <p class="info1">La &#60;!DOCTYPE> declaración representa el tipo de documento y ayuda a los navegadores a mostrar las páginas web correctamente</p>
    <p class="info1">Solo debe aparecer una vez, en la parte superior de la página (antes de cualquier etiqueta HTML).</p>
    <p class="info1">La &#60;!DOCTYPE> declaración no distingue entre mayúsculas y minúsculas.</p>      
    <center>  
    <table style="color: red; width: 500px; height: 50px; background-color:gray;">
        <th style="background-color: white;">&#60;!DOCTYPE html></th>
    </table>
    </center>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>Encabezados HTML</h2>
    <p class="info1">Los encabezados HTML se definen con las etiquetas &#60;h1> a &#60;h6>.</p>
    <p class="info1">&#60;h1>define el encabezado más importante. <br>&#60;h6>define el encabezado menos importante: </p>
    <div class="Ejer2" style="width: 330px;">
        <p>Ejercicio</p>
        <form action="ejercicio3.php" method="post" autocomplete="off">
                        <br><br>
                        <input type="text" name="enc1" maxlength="4" size="1">&nbsp; este es un Encabezado &#60;/h1> <br><br><br>
                        &#60;h2> este es otro Encabezado&nbsp;  <input type="text" name="enc2" maxlength="5" size="1"><br><br><br>
                        <input id="01" type="submit" value="Mandar Respuesta" class="Btn-02" >
                    </form>
    </div>
         <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo "
 <!DOCTYPE html>
 <html>
 <head>
 <title>Titulo de Pagina</title>
 </head>
 <body>
 <h1>Este es Encabezado 1</h1>
 <h2>Este es Encabezado 2</h2>
 <h3>Este es Encabezado 3</h3>
 </body>
 </html>"
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNDYLHJ0QPT" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
    <br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>Párrafos HTML</h2>
    <p class="info1">Los párrafos HTML se definen con la etiqueta &#60;p></p>
    <div class="Ejer2">
        <p>Ejercicio</p>
        <form action="ejercicio2.php" method="post" autocomplete="off">
                        <br><br>
                        <input type="text" name="prf1" maxlength="3" size="1">&nbsp; este es un parrafo &#60;/p> <br><br><br>
                        &#60;p> este es otro parafo&nbsp;  <input type="text" name="prf2" maxlength="4" size="1"><br><br><br>
                        <input id="01" type="submit" value="Mandar Respuesta" class="Btn-02" >
                    </form>
    </div>
    <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo "
 <!DOCTYPE html>
 <html>
 <head>
 <title>Titulo de Pagina</title>
 </head>
 <body>
 <p>Este es un parrafo</p>
 <P>Este es otro parrafo</P>
 </body>
 </html>"
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNE53EK2FDV" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>Enlaces HTML</h2>
    <p class="info1">Los enlaces HTML se definen con la etiqueta &#60;a></p>
    <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo '
 <!DOCTYPE html>
 <html>
 <head>
 <title>Titulo de Pagina</title>
 </head>
 <body>
 <a href="https://metcashew.github.io/Carousel-de-juegos-retro/">Este es un enlace</a>
 </body>
 </html>'
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNEEIXVEOM4" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br>
    <p class="info1">El destino del enlace se especifica en el atributo <u style="color: red;"> href=""</u> </p>
    <p class="info1">Los atributos se utilizan para proporcionar información adicional sobre elementos HTML.</p>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">    
    <h2>Imágenes HTML</h2>
    <p class="info1">Las imágenes HTML se definen con la etiqueta &#60;img>. <br>
    El archivo de origen (<u style="color: red;">src</u>), el texto alternativo (<u style="color: red;">alt</u>) <br></p>
    <div class="Ejer2" style="height: 250px;">
            <img src="images/csslogo.png" width="250px">
        </div> 
    <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo '
 <!DOCTYPE html>
 <html>
 <head>
 <title>Titulo de Pagina</title>
 </head>
 <body>
 <img src="https://bit.ly/2SQyCtl" alt="PruebaImagen">
 </body>
 </html>'
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQNF64SWI5OJ" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">  
        <br><br>
        <center>
        <a href="Editors.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="·"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    </div>
    </div>
    </div>
    
</body>
</html>