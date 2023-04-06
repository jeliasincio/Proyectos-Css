<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/miCss.css">
    <title>Acceso al Sistema</title>
</head>
<body>
   <form class="form">
    <h2 class="form_titulo">Inicio de Sesión</h2>
    <p class="form_parrafo">¿Aún no tienes cuenta? <a href="#" class="form_enlace">Entra aquí</a></p>
    <div class="form_contenedor">
        <div class="form_grupo">
            <input type="text" id="nombre" class="form_input" placeholder=" " required >
            <label for="nombre" class="form_label">Nombre:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input type="text" id="usuario" class="form_input" placeholder=" "required >
            <label for="usuario" class="form_label">Usuario:</label>
            <span class="form_line"></span>
        </div>
        <div class="form_grupo">
            <input type="text" id="password" class="form_input" placeholder=" " required >
            <label for="password" class="form_label">Contraseña:</label>
            <span class="form_line"></span>
        </div>
        <input type="submit" class="form_submit" value="Entrar">
    </div>
   </form> 
</body>
</html>