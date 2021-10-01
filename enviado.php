<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado</title>
</head>
<body>
    <h1>El valor del area de las figuras es</h1>
   <?php
   $base = htmlspecialchars($_POST['base']);
   $altura = htmlspecialchars($_POST['altura']);
   $lado = htmlspecialchars($_POST['lado']);
   $radio = htmlspecialchars($_POST['radio']);

if ($base && $altura && $lado && $radio){

    function triangulo($base, $altura){
        $area_triangulo = ($base*$altura)/2;
        return $area_triangulo;
    }
    function cuadrado($lado){
        $area_cuadrado = $lado*$lado;
        return $area_cuadrado;
    }
    function circulo($radio){
        $area_circulo = ($radio ** 2)*3.14;
        return $area_circulo;
    }
   
echo "el area del triangulo es: ". triangulo($base, $altura). " m<sup>2</sup>";
echo "<br>";
echo "el area del cuadrado es: ". cuadrado($lado). " m<sup>2</sup>";
echo "<br>";
echo "el area del circulo es: ". circulo($radio). " m<sup>2</sup>";

}else {
echo "FALTAN DATOS";
}
  
  ?>
 <br>
 <br>
 <a href ="index.php"> Volver
     <br>
</body>
</html>

