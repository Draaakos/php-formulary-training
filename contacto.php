<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Datos</title>
</head>
<body>
    <div>
        <h1 class="title">Formulario de contacto</h1>
        <h3>Si deseas ponerte en contacto con nosotros, rellene el formulario y te lo responderemos lo antes posible.</h3>

        <form class="form" action="./enviado.php" method="post">
            <div>
                <div>
                    <img src="" alt="" />
                    <img src="" alt="" />
                </div>
                
                <div>
                    <div>Obligatorio</div>

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
            
            <div>
                <input type="checkbox" name="casilla"><label>Enviarme una copia</label>
                <input type="submit" value="Enviar mensaje" />
            </div>
        </form>
    </div>
</body>
</html>