<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Datos</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <h3>Si deseas ponerte en contacto con nosotros, rellene el formulario y te lo responderemos lo antes posible.<h3>
    <form action="enviado.php" method="post">
        <input type="text" name="name" placeholder="Nombre Completo" autofocus="">
        <br>
        <input type="text" name="firstname" placeholder="(Firstname)">
        <br>
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <input type="tel" name="telefono" placeholder="Teléfono">
        <br>
        <br>
        <input type="text" name="ciudad" placeholder="Ciudad">
        <br>
        <input type="text" name="pais" placeholder="País">
        <br>
        <br>
        <textarea name="texto" rows="15" cols="50"></textarea>
        <br>
        <input type="checkbox" name="casilla"><label>Enviarme una copia</label>
        
        <input type="submit" name="aceptar" value="Enviar mensaje">
    </form>
</body>
</html>