<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="introCSS.css">
    <link rel="icon" href="images/Logo.png">
    <title>HTML Editores</title>
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
        <h1>HTML Editores</h1>
        <a href="intro.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Basic.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <font style="text-align: justify;">
        <p class="info1">Un simple editor de texto es todo lo que necesita para aprender HTML.</p>
        </font>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <font style="text-align: justify;">
        <h2 align="center">Aprende HTML con el Bloc de notas o TextEdit</h2>
        <p class="info1">Las páginas web se pueden crear y modificar utilizando editores HTML profesionales. </p>
        <p class="info1">Sin embargo, para aprender HTML, recomendamos un editor de texto simple como el Bloc de notas (PC) o TextEdit (Mac).</p> 
        <p class="info1"> Creeemos que usar un editor de texto simple es una buena forma de aprender HTML. </p>
        <p class="info1"> Siga los pasos a continuación para crear su primera página web con el Bloc de notas o TextEdit.</p>
    </font>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <font style="text-align: justify;">
    <h2 align="center">Paso 1: Abra el Bloc de notas (PC)</h2>
        <p class="info1"><b>Windows 8 o posterior:</b></p>
        <p class="info1">Abra la pantalla de inicio (el símbolo de la ventana en la parte inferior izquierda de su pantalla). Escriba Bloc de notas </p>
        <p class="info1"><b>Windows 7 o anterior:</b></p>
        <p class="info1">Abra Inicio > Programas> Accesorios> Bloc de notas</p>
    </font>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
        <h2 align="center">Paso 1: Abra TextEdit (Mac)</h2> 
        <font style="text-align: justify;">
        <p class="info1">Abre Finder> Aplicaciones> TextEdit</p>
        <p class="info1">También cambie algunas preferencias para que la aplicación guarde los archivos correctamente. En Preferencias> Formato> elija "Texto sin formato "</p>
        <p class="info1">Luego, en "Abrir y guardar", marque la casilla que dice "Mostrar archivos HTML como código HTML en lugar de texto formateado".</p>
        <p class="info1">Luego abra un nuevo documento para colocar el código.</p>
        </font>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">  
        <h2 align="center">Paso 2: Escribe algo de HTML</h2>
        <font style="text-align: justify;">
        <p class="info1">Escriba o copie el siguiente código HTML en el Bloc de notas:</p>
        </font>
        <div class="codebox">
        <p>&nbsp;&nbsp; Ejemplo:</p>
         <div class="code">
             <textarea disable="true"  >
                 <?php
                 echo "
                 <!DOCTYPE html>
                 <html>
                 <body>
                 
                 <h1>Mi Primer Encabezado</h1>

                 <p>Mi Primer Parrafo.</p>
                 
                 </body>
                 </html>"
                 ?>
             </textarea>
         </div>
     </div>
     <br><br>
     <img src="images/Captura1.PNG">  
    <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
        <h2>Paso 3: guarde la página HTML</h2>
        <font style="text-align: justify;">
        <p class="info1">Guarde el archivo en su computadora. Seleccione Archivo> Guardar como en el menú del Bloc de notas.</p>
        <p class="info1">Nombra el archivo "index.htm" y configura la codificación en UTF-8 (que es la codificación preferida para archivos HTML).</p>   
        </font>     
        <img src="images/Captura2.PNG">
        <p class="info1" style="background-color: coral;">Consejo: puede utilizar .htm o .html como extensión de archivo. No hay diferencia, depende de ti.</p>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">     
        <h2>Paso 4: vea la página HTML en su navegador</h2>
        <font style="text-align: justify;">
        <p class="info1">Abra el archivo HTML guardado en su navegador favorito (haga doble clic en el archivo o haga clic con el botón derecho y elija "Abrir con").</p>
        <p class="info1">El resultado se parecerá mucho a esto:</p>
        </font>
        <img src="images/Captura3.PNG">
        <br><br>
        <center>
        <a href="intro.php"><input type="button" class="btnlft" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="REGRESAR"></a>
        <a href="Basic.php"><input type="button" class="btnrgh" style="background-color: #8ae9b3;
    background-image: linear-gradient(315deg, #8ae9b3 0%, #c8d6e5 74%);" value="SIGUIENTE"></a><br><br><br>
    </center>
    </div>
</body>
</html>