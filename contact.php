<?php

    $error = ""; 
    $mensajeExito = "";

    if ($_POST) {
        
     if ($_POST['email'] == "") {
            
            $error .= "Es obligatorio una dirección de email.<br>";
            
        }
        
        if ($_POST['Asunto'] == "") {
            
            $error .= "El contenido del mensaje es obligatorio.<br>";
            
        }
        
        if ($_POST['Mensaje'] == "") {
            
            $error .= "El campo asunto del mensaje es obligatorio.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "Correo electrónico no válido.<br>";
            
        }
        
        if ($error != "") {
            
            $error = "<p>Hubo algún error en el formulario:</p>". $error."";
            
        } else {
            
            $emailA = "agusgarone02@gmail.com";
            
            $asunto = $_POST['Asunto'];
            
            $Mensaje = $_POST['Mensaje'];
            
            $cabeceras = "From: ".$_POST['email'];

            if (mail($emailA, $asunto, $Mensaje, $cabeceras)) {
                
                $mensajeExito = "<p>Mensaje enviado con éxito, nos pondremos en contacto pronto!</p>";
                
            } else {
                
                $error = "<p>El mensaje no pudo ser enviado, por favor inténtalo más tarde</p>";
            }  
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="cont">
        <div class="head">
            <div class="logo">
                <h2 id="nombre">Agustin Garone</h2>
            </div>
            <div class="navlinks">    
                <a class="nav" href="contact.php">Contact</a>
                <a class="nav" href="">About me</a>
                <a class="nav" id="btn-home" href="index.html">Home</a>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>  

        <form id="Formulario" method="post">
            <h3>Charlemos: </h3>
            <div class="elemento">
                <label for="email">email:</label>
                <br>
                <input type="text" name="email" id="email" placeholder="ejemplo@dominio.com">
            </div>
            <div class="elemento">
                <label for="Asunto">Asunto:</label>
                <br>
                <input type="text" name="Asunto" id="Asunto">
            </div>
            <div class="elemento">
                <label for="Mensaje">Mensaje:</label>
                <br>
                <textarea name="Mensaje" id="Mensaje" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" id="boton">Enviar</button>
        </form>

        <div id="error"><? echo $error.$mensajeExito; ?></div>

        <footer id="pie">
            <div class="text">
                <h2>Pagina hecha por Agustín Garone</h2>
                <p>Derechos reservados &copy;</p>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
            $("#boton").submit(function(){

                 var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "Campo email obligatorio.<br>"
                  
              }
              
              if ($("#asunto").val() == "") {
                  
                  error += "Campo asunto obligatorio.<br>"
                  
              }
              
              if ($("#contenido").val() == "") {
                  
                  error += "Campo contenido obligatorio.<br>"
                  
              }
              
              if (error != "") {
                  
                 document.getElementById("#error").style.color = "red"; 
                 $("#error").html('<div> Hubo algún error en el formulario</p>' + error + '</div>');
                
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
            })
              
    </script>
</body>
</html>
