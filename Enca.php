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
    <title>HTML Encabezados</title>
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
        <h1>Encabezados HTML</h1>
        <a href="Basic.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Par.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
        </center>
        <font style="text-align: left;">
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <p class="info1">Los encabezados HTML son títulos o subtítulos que desea mostrar en una página web.</p>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <p class="info1">
    Los encabezados HTML se definen con las etiquetas &#60;h1> a &#60;h6>. <br> <center>
    &#60;h1>define el encabezado más importante. <br>&#60;h6>define el encabezado menos importante:</center> </p>
    <div class="Ejer2" style="width: 330px;"><center>
        <p>Ejercicio</p>
        <form action="ejercicio3.php" method="post" autocomplete="off">
                        <br><br>
                        <input type="text" name="enc1" maxlength="4" size="1">&nbsp; este es un Encabezado &#60;/h1> <br><br><br>
                        &#60;h2> este es otro Encabezado&nbsp;  <input type="text" name="enc2" maxlength="5" size="1"><br><br><br>
                        <input id="01" type="submit" value="Mandar Respuesta" class="Btn-02" >
                    </form></center>
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
    <p class="info1" style="background-color: coral;">Nota: los navegadores añaden automáticamente algunos espacios en blanco (un margen) antes y después de un encabezado.</p>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <br><center><h2>Los títulos son importantes</h2></center>
        <p class="info1">Los motores de búsqueda utilizan los títulos para indexar la estructura y el contenido de sus páginas web. <br><br>
    Los usuarios a menudo hojean una página por sus títulos. Es importante utilizar títulos para mostrar la estructura del documento. <br><br>
    &#60;h1> Los títulos deben usarse para los títulos principales, seguidos de los &#60;h2> títulos, luego los menos importantes &#60;h3>, y así sucesivamente.</p>     
        <p class="info1" style="background-color: coral;">Nota: Utilice encabezados HTML solo para encabezados. No use títulos para hacer que el texto sea GRANDE o en negrita .</p>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">       
      <center><h2>Encabezados más grandes</h2></center> 
        <p class="info1">Cada encabezado HTML tiene un tamaño predeterminado. Sin embargo, puede especificar el tamaño de cualquier encabezado con el <u style="color: red;">style</u> atributo, 
        utilizando la <u style="color: red;">font-size</u> propiedad CSS :</p>
        </font>
        <div class="codebox" style="height: 135px;">
            <p>&nbsp;&nbsp;</p>
                 <div class="code" style="height: 100px; top: -20px;">
                     <br><br><br>
              <font style="font-size: 20px;">  &#60;h1 style="font-size:60px;">  <font style="color: white;">Encabezado 1</font>  &#60;/h1> </font>
        </div>
    </div>
    <br>
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQQVS97IYZG7" target="blank"><input class="btnEjm" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" type="button" value="Intentar"></a>
    <br>
<hr style="height:2px;border-width:0;color:gray;background-color:black">  

<div class="codebox">
        <center><h3>Ejercicio:</h3></center>
        <div class="code" >
            <center><br>
            <p>Utilice la etiqueta HTML correcta para agregar un encabezado grande con el texto "Londres".</p>
            </center>
                <div class="txt" style=" color: white; font-size: 18px;">
                    <form action="ejercicio4.php" method="post" autocomplete="off">
                        <br><br>
                        &nbsp;&nbsp;&nbsp;<input style="font-size: 25px;" type="text" name="enc1" maxlength="16" size="12">&nbsp;<br><br>
                        &nbsp; &#60;p> Londres es la capital de Inglaterra. 
                        Es la ciudad más poblada &nbsp;del Reino Unido, con un área metropolitana de más de 13 millones &nbsp;de habitantes. &#60;/p> <br><br><br>  
                </div>
        </div>
    </div>
    <input type="submit" value="Mandar Respuesta" class="Btn-02">
        </form>
    <br><br><br>



        
        <a href="Editors.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="·"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    
    </div>
    </div>
    
</body>
</html>