<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Datos</title>
</head>
<body>
    <h1>Sus datos fueron enviados satisfacoriamente</h1>
   <?php
   $nombre = htmlspecialchars($_POST['name']);
   $firstname = htmlspecialchars($_POST['firstname']);
   $email = htmlspecialchars($_POST['email']);
   $telefono = htmlspecialchars($_POST['telefono']);
   $ciudad = htmlspecialchars($_POST['ciudad']);
   $pais = htmlspecialchars($_POST['pais']);
   $cuadro = htmlspecialchars($_POST['cuadrotexto']);
   $casilla =(isset($_POST['casilla']));

if ($nombre && $firstname && $email && $telefono && $ciudad && $pais){

echo "Su nombre completo es: ". $nombre;
echo "<br>";
echo "Su primer nombre es: ". $firstname;
echo "<br>";
echo "Su email es: ". $email;
echo "<br>";
echo "Su telefono movil es: ". $telefono;
echo "<br>";
echo "Recide en: ". $ciudad.", ". $pais;
echo "<br>";
echo "Su informacion adicional: ". $cuadro;
echo "<br>";
}else {
    echo "FALTAN DATOS";
    }
if($casilla){
echo "Se a enviado su copia";
}else{
echo "no se a enviado su copia";
}
  ?>
 <br>
 <br>
 <a href ="index.php"> Volver
     <br>
</body>
</html>

