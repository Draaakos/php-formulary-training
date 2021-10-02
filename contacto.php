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
                    <img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnZ33FVYTQYHix0DK0Sdq3eO0a1ObuxwbTolMv1igqAz-JpMGfXx3HUxdXL2KvWWx682E&usqp=CAU" alt="" />
                    <img src= "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAWlBMVEX///8AAACjo6OPj4+mpqbm5uby8vK4uLj39/fa2tqurq52dnYEBAQ7Ozu1tbUhISFwcHBERETLy8sMDAyGhoaampp9fX3U1NQTExO+vr5LS0uAgIDs7OwoKCj50fFrAAADMUlEQVR4nO2c61YaQRAGWRMVQS4xYi6Q93/NJES3F1iY3dme6Z5J1W8PbGnXd9TjcTYDAAAAAAAAAAAAAEjBy+7F+hHSsmyaZmv9EAmZr5q/bO6tHyQVT80Ha+tHScOiEaq81GXTpb5LfU+wQ2WX+nTuV9ulLnoEq7rUZa9gPZd6mWBll9qXYFWX2p9gRZd6NcFKLvVWglVc6u0EK7jUYIKlX+qABIu+1GEJ3rjUt6Z5vqRZfTPRuWRwgsLppb5d/bgHI6VTRiQonFzq9Q97NLPqMCrBDp1LdW04OkFBLtWzYUSCQnupjg2jEuzwfql+DWMTFLauDSckKBwv1anhpAQ7rL0aTk1Q2Po0nJ6gsPruz1AlwSFYGWol6NZQL0GnhpoJejTMlqCVYb4EjQwzJmhjmDNBC8O8CRoYZk4wv2HuBLMbZk8ws6FBgnkNLRLMamiSYE5DmwTzGVolmM3QLMFchnYJZjI0TDCLoWmCR36kFbRN8MjPpILGCf7j6yGdoHWCH6T6a3j7BFvukgg6SFBYJhB0kaDwRV3QS4ItynvjKEFBc29cJSjo7Y2zBAWtvXGXoKCyNy4TbFHYG6cJClP3xm2CwrS9cZygMGFvfCcoRO+N+wRbIvemgASFmL0pIkFh9N6UkqAwcm/KSVAYtTdFJdgyYm8KS1AYuDflJSgM2psSExQG7E2ZCQrBvSk2wZbbe1NygsKNvSk7QeHq3pSeoHBlb8pPUOjbmzoSbHm+2JtaEhTO9qaeBIWTvakpQaGzN4/Wz5II+ZuGV+tHScTrf/Q1nO2tnyUJ+5MxfThnvrN+wFHs5hcG/d/XdLizfuhRxPxqH0NfYIihfzDE0D8YYugfDDMY7g/3QQ7xP884MPw05D0/R788hhgqgCGGATDEUAEMMQyAIYYKYIhhAAwxVABDDANgiKECGGIYAEMMFcAQwwAYYqgAhhgGwBBDBTDEMACGGCqAIYYBMMRQAQwxDIAhhgpgiGEADDFUAEMMA2CIoQIYYhgAwz6U/4Xbbsh7rqNffhFhONso+jXNfNB7/op89U2M4J+v4p0agz/F67QvDwAAAAAAAAAAAAAV8xukhWq2mHKDfgAAAABJRU5ErkJggg==" alt="" />
                </div>
                
                <div>
                    <div class="subtitle">Obligatorio</div>

                    <div class="boxOne">
                        <input type="text" name="name" placeholder="Nombre Completo" required />
                        <input type="text" name="firstname" placeholder="Firstname" required />
                        <input type="text" type="email" name="email" placeholder="example@gmail.com" required />
                        <input type="text" name="telefono" placeholder="Teléfono" required />
                    </div>

                    <div class="boxTwo">
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