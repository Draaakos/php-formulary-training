<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Datos</title>
</head>
<body>
    <div class="form-section">
        <div class="form-section__header">
            <h1 class="title">Formulario de contacto</h1>
            <h3 class="description">Si deseas ponerte en contacto con nosotros, rellene el formulario y te lo responderemos lo antes posible.</h3>
        </div>
        <hr class="line">
        <form action="./enviado.php" method="post">
            <div class="form">
                <div class="form-section__general-info">
                    <div class="form-section__general-info__division form-section__general-info__division-image-list">
                        <div class="wrapper__images">
                            <div class="image__container"><img src= "./src/images/person.png" alt="" /></div>
                            <div class="image__container"><img src= "./src/images/home.png" alt="" /></div>
                        </div>
                    </div>
                    
                    <div class="form-section__general-info__division form-section__general-info__division-input-list">
                        <div class="subtitle">Obligatorio</div>

                        <div class="wrapper__input">
                            <input type="text" name="name" placeholder="Nombre" required />
                            <input type="text" name="firstname" placeholder="(Firstname)" required />
                            <input type="text" type="email" name="email" placeholder="E-mail" required />
                            <input type="text" name="telefono" placeholder="Teléfono" required />
                        </div>

                        <div class="wrapper__input">
                            <input type="text" name="ciudad" placeholder="Ciudad" required />
                            <input type="text" name="pais" placeholder="País" required />
                        </div>
                    </div>
                </div>

                <div class="wrapper__textarea">
                    <textarea class="textarea" rows="4" cols="20" name="cuadrotexto"></textarea>
                </div>
            </div>

            <div class="send">
                <div>
                    <input type="checkbox" name="casilla">
                    <label>Enviarme una copia</label>
                </div>
                <div>
                    <input type="submit" value="Enviar mensaje" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>