<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Datos</title>
</head>
<body>
    <div class="formul">
        <h1 class="title">Formulario de contacto</h1>
        <h3 class="description">Si deseas ponerte en contacto con nosotros, rellene el formulario y te lo responderemos lo antes posible.</h3>
        <hr class="line">
        <form class="form" action="./enviado.php" method="post">
            <div class="main__box">
                <div class="images">
                    <div class="wrapper__image"><img src= "./src/images/person.png" alt="" /></div>
                    <div class="wrapper__image"><img src= "./src/images/home.png" alt="" /></div>
                </div>
                
                <div class="box">
                    <div class="subtitle">Obligatorio</div>

                    <div>
                        <input type="text" name="name" placeholder="Nombre Completo" required />
                        <input type="text" name="firstname" placeholder="Firstname" required />
                        <input type="text" type="email" name="email" placeholder="example@gmail.com" required />
                        <input type="text" name="telefono" placeholder="Teléfono" required />
                    </div>

                    <div>
                        <input type="text" name="ciudad" placeholder="Ciudad" required />
                        <input type="text" name="pais" placeholder="País" required />
                    </div>
                </div>
            </div>
            
            <div class="send">
                <input type="checkbox" name="casilla"><label>Enviarme una copia</label>
                <input type="submit" value="Enviar mensaje" />
            </div>
        </form>
    </div>
</body>
</html>