<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="ComStyles.css">
    <link rel="icon" href="images/Logo.png">
    <title>Principio</title>
</head>
<body style=" background-color: #f876de;
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
    
<div class="top">
    <h1>Aprender HTML</h1>
    <p>HTML es el lenguaje de marcado estándar para páginas web. Con HTML puedes crear su propio sitio web. HTML es fácil de aprender</p>
    <img src="images/htmllogo.png">
    <div class="infRight">
        <h1>HTML Tutoriales</h1>
        <a href="Comenzar.php"><input  type="button" value="HTML Principio"></a><br>
        <a href="intro.php"><input  type="button" value="HTML Introduccion"></a><br>
        <a href="Editors.php"><input type="button" value="HTML Editores"></a><br>
        <a href="Basic.php"><input type="button" value="Basico HTML"></a><br>
        <a href="Enca.php"><input type="button" value="Encabezados HTML"></a><br>
        <a href="Par.php"><input type="button" value="Parrafos HTML"></a><br>
        
    </div>
</div>

<center>
        <a href="index.html"><input type="button" class="BtnEn" value="REGRESAR" style="position: absolute; left: -375px;"></a>
        <a href="intro.php"><input type="button" class="BtnEn" value="SIGUIENTE" style="position: absolute; left: 150px;"></a><br><br><br><br><br>
    </center> 

<div class="tester">
    
    <h2>¡Facil de aprender con nuestra herramienta de codigo en-linea!</h2>
     <p>¡intenta tu mismo!</p>
    <div class="codebox">
       <p>&nbsp;&nbsp; Ejemplo:</p>
        <div class="code">
            <textarea disable="true"  >
                <?php
                echo "
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
    <a href="https://www.w3schools.com/code/tryit.asp?filename=GQHB8IP0WRSP" target="blank"><input class="btnEjm" type="button" value="Intentar"></a>
   

    <h2>¡Aprende con ejercicios!</h2>
    <div class="codebox">
    <p>&nbsp;&nbsp; Ejemplo:</p>
        <div class="code">
            <center>
            <h3>Ejercicio:</h3>
            <p>Agrega lo que falta al codigo:</p>
            </center>
                <div class="txt" style=" color: white; font-size: 18px;">
                    <form action="ejercicio1.php" method="post" autocomplete="off">
                        <br><br>
                        <input type="text" name="enc"maxlength="5" size="1">&nbsp; este es un encabezado &#60;/H1> <br><br><br>
                        &#60;p> este es un parafo&nbsp;  <input type="text" name="prf"maxlength="4" size="1"><br>
                        <input id="01" type="submit" value="Mandar Respuesta" class="Btn-02" >
                    </form>
                   
                </div>
        </div>
    </div>
<br><br><br>

</body>
</html>