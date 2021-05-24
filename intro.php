<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="introCSS.css">
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
        <a href="Comenzar.php"><input  type="button" value="HTML Principio"></a><br>
        <a href="intro.php"><input type="button" value="HTML Introduccion"></a><br>
        <a href="Editors.php"><input type="button" value="HTML Editores"></a><br>
        <a href="Basic.php"><input type="button" value="Basico HTML"></a><br>
        <a href="Enca.php"><input type="button" value="Encabezados HTML"></a><br>
        <a href="Par.php"><input type="button" value="Parrafos HTML"></a><br>
        <input type="button" value=""><br>
        <input type="button" value=""><br>
    
    <div class="info">
        <center>
        <h1>HTML Introduccion</h1>
        <a href="Comenzar.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Editors.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <p class="info1">&nbsp; HTML es el lenguaje de marcado estándar para crear páginas web.</p>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h2>¿Que es HTML?</h2>
    <ul align="left">
        <li>HTML son las siglas de Hyper Text Markup Language</li>
        <li>HTML es el lenguaje de marcado estándar para crear páginas web.</li>
        <li>HTML describe la estructura de una página web</li>
        <li>HTML consta de una serie de elementos</li>
        <li>Los elementos HTML le dicen al navegador cómo mostrar el contenido.</li>
        <li>Los elementos HTML etiquetan partes de contenido como "esto es un encabezado", "esto es un párrafo", "esto es un enlace", etc.</li>
    </ul>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <center><h2>Un Documento HTML simple</h2></center>
    <div class="codebox">
        <p>&nbsp;&nbsp; Ejemplo:</p>
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
     <a href="https://www.w3schools.com/code/tryit.asp?filename=GQHB8IP0WRSP" target="blank"><input style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" class="btnEjm" type="button" value="Intentar"></a>
    <h2>Ejemplo explicado</h2>
    <ul align="left">
        <li>La <span style="color: red;">&#60;!DOCTYPE html&#62;</span> declaración define que este documento es un documento HTML5</li>
        <li>El <span style="color: red;">&#60;html&#62;</span>  elemento es el elemento raíz de una página HTML.</li>
        <li>El <span style="color: red;">&#60;head&#62;</span>  elemento contiene metainformación sobre la página HTML.</li>
        <li>El <span style="color: red;">&#60;title></span> elemento especifica un título para la página HTML (que se muestra en la barra de título del navegador o en la pestaña de la página)</li>
        <li>El <span style="color: red;">&#60;body></span> elemento define el cuerpo del documento y es un contenedor para todos los contenidos visibles, como encabezados, párrafos, imágenes, hipervínculos, tablas, listas, etc.</li>
        <li>El <span style="color: red;">&#60;h1></span> elemento define un encabezado grande</li>
        <li>El <span style="color: red;">&#60;p></span> elemento define un párrafo</li>
    </ul>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <center><h2>¿Que es un elemento HTML?</h2></center>
        <p class="info1">Un elemento HTML se define mediante una etiqueta de inicio, algo de contenido y una etiqueta de finalización:</p>
        <p style="color: red; font-size: 20px;">&#60; Nombre de la etiqueta ><span style="color: black;"> El contenido va aqui</span> &#60; / Nombre de la etiqueta></p>
        <p class="info1">El elemento HTML es todo, desde la etiqueta de inicio hasta la etiqueta de finalización: </p>
        <h2><span style="color: red;">&#60;h1></span> Mi Primer Titulo <span style="color: red;">&#60;/h1></span></h2> 
        <h2><span style="color: red;">&#60;p></span> Mi Primer Parrafo <span style="color: red;">&#60;/p></span></h2> <br>
        <table border="5px" style="text-align: center; width: 700px; height: 200px;">
            <tr>
                <th>Etiqueta de inicio</th>
                <th>Contenido</th>
                <th>Etiqueta de cierre</th>
            </tr>
            <tr>
                <td>&#60;H1></td>
                <td>Mi Primer Titulo</td>
                <td>&#60;/h1></td>
            </tr>
            <tr>
                <td>&#60;p></td>
                <td>Mi Primer Parrafo</td>
                <td>&#60;/p></td>
            </tr>
            <tr>
                <td>&#60;br></td>
                <td>Ninguno</td>
                <td>Ninguno</td>
            </tr>
        </table>
        <br><br>
            <p class="info1" style="background-color: coral;">Nota: algunos elementos HTML no tienen contenido (como el elemento &#60;br>). Estos elementos se denominan elementos vacíos. ¡Los elementos vacíos no tienen etiqueta de cierre!</p>
        <br><br>
        <center>
        <a href="Comenzar.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Editors.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    </div>
    </div>
</body>
</html>