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
    <title>Parrafos HTML</title>
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
        <h1>Parrafos HTML</h1>
        <a href="Enca.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Enla.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
        </center>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <font style="text-align: justify;">
   <p class="info1">El <u style="color: red;">&#60;p></u> elemento HTML define un p??rrafo. </p>
   </font>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <font style="text-align: justify;">
    <p class="info1">Los p??rrafos HTML se definen con la etiqueta <u style="color: red;">&#60;p></u><br><br>
    Un p??rrafo siempre comienza en una nueva l??nea y los navegadores agregan autom??ticamente un espacio en blanco (un margen) antes y despu??s de un p??rrafo. <br>
    </p>
    </font>
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
   <br> <br>
<hr style="height:2px;border-width:0;color:gray;background-color:gray"> <br>
   <h2>Pantalla HTML</h2>
   <font style="text-align: justify;">
    <p class="info1">No puede estar seguro de c??mo se mostrar?? HTML. <br><br>
    Las pantallas grandes o peque??as y las ventanas redimensionadas generar??n resultados diferentes. <br><br>
    Con HTML, no puede cambiar la visualizaci??n agregando espacios o l??neas adicionales en su c??digo HTML. <br><br>
    El navegador eliminar?? autom??ticamente los espacios y l??neas adicionales cuando se muestre la p??gina:</p>
   </font>
   <div class="codebox">
            <p>&nbsp;&nbsp;</p>
                 <div class="code">
                  <textarea disable="true"  >
                <?php
                echo "
 <p>Este p??rrafo contiene 
 muchas l??neas en el c??digo fuente, 
 pero el navegador lo ignora.</p>

 <P>Este p??rrafo      contiene
  muchos       espacios en el 
  c??digo fuente,       pero el 
  navegador      lo ignora.</P>
 "
                ?>
            </textarea>
        </div>
    </div>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQR3PBWPY7SW" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
   <br> <br>
   <div class="Ejer2" style="height: 250px;">
            <img src="images/csslogo.png" width="250px">
        </div> 
   <div class="codebox">
        <center><h3>Ejercicio:</h3></center>
        <div class="code" >
            <center><br>
            <p>Utilice la etiqueta HTML correcta para agregar un p??rrafo con el texto "Hola mundo".</p>
            </center>
                <div class="txt" style=" color: white; font-size: 18px;">
                    <form action="ejercicio5.php" method="post" autocomplete="off">
                        <br><br>
                        &#60;html> <br>
                        &#60;body> <br> <br>    
                        <input style="font-size: 25px;" type="text" name="prf1" maxlength="17" size="14">&nbsp;<br><br>
                        &#60;/html> <br>
                        &#60;/body> <br>
                    </div>
        </div>
    </div>
    <input type="submit" value="Mandar Respuesta" class="Btn-02">
        </form>
    <br><br><br>



        <br><br>
        <center>
        <a href="Enca.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="??"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    </div>
    </div>
    
    
</body>
</html>