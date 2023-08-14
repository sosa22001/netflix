<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuenta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/browse.css')}}">

    <style>
        .container1 {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .section1 {
        margin-bottom: 40px;
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding-top: 5rem
    }
    .section h2 {
        margin-top: 0;
    }
    .section p {
        line-height: 1.6;
    }
    .container2 {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    .faq {
        margin-bottom: 20px;
        padding: 10px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    summary {
        cursor: pointer;
        font-weight: bold;
    }
        </style>
</head>

<body>

    <main id="mainContainer" class="p-b-40">

        <header class="d-flex space-between flex-center flex-middle" style="padding-top: 2rem;">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="#">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
            </div>
            <div class="righticons d-flex flex-end flex-middle"> 
                <div class="dropdown">
                        <i class="fa-solid fa-grip-lines" style="color: #aaa; font-size:2rem;"></i>

                        <div class="dropdown-content">
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario])}}">Cuenta</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                            
                        </div>
                </div>

            </div>


        </header>


        <!--Preguntas-->
        <div class="container1">
            <div class="section1">
                <h2>Preguntas Frecuentes</h2>
                <p>Encuentra respuestas a las preguntas más comunes sobre el uso de Netflix.</p>
                <div class="container2">
                    <div class="faq">
                        <details>
                            <summary>¿Cómo creo una cuenta en Netflix?</summary>
                            <p>Para crear una cuenta en Netflix, sigue estos pasos:<br>
                            1. Visita el sitio web de Netflix: www.netflix.com.<br>
                            2. Haz clic en "Registrarse" o "Crear una cuenta".<br>
                            3. Sigue las instrucciones para ingresar tu información personal y seleccionar un plan.<br>
                            4. Proporciona la información de pago y completa el proceso de registro.<br>
                            Una vez que hayas completado estos pasos, habrás creado una cuenta en Netflix y podrás comenzar a disfrutar de contenido en streaming.</p>
                        </details>
                    </div>
                    <div class="faq">
                        <details>
                            <summary>¿Cómo puedo restablecer mi contraseña?</summary>
                            <p>Si olvidaste tu contraseña de Netflix, sigue estos pasos:<br>
                            1. Ve a la página de inicio de sesión de Netflix: www.netflix.com.<br>
                            2. Haz clic en "¿Olvidaste tu contraseña?" o "¿Necesitas ayuda para iniciar sesión?".<br>
                            3. Ingresa la dirección de correo electrónico asociada con tu cuenta de Netflix y sigue las instrucciones para restablecer tu contraseña.<br>
                            Una vez que hayas completado estos pasos, recibirás un correo electrónico con instrucciones para restablecer tu contraseña.</p>
                        </details>
                    </div>
                    <div class="faq">
                        <details>
                            <summary>¿Cómo cancelo mi suscripción?</summary>
                            <p>Para cancelar tu suscripción a Netflix, sigue estos pasos:<br>
                            1. Inicia sesión en tu cuenta de Netflix en el sitio web: www.netflix.com.<br>
                            2. Ve a la sección de "Cuenta" o "Mi Cuenta".<br>
                            3. Selecciona la opción "Cancelar membresía" o "Cancelar suscripción".<br>
                            4. Sigue las instrucciones para confirmar la cancelación de tu suscripción.<br>
                            Una vez que hayas completado estos pasos, tu suscripción se cancelará al final del ciclo de facturación actual.</p>
                        </details>
                    </div>
                    <div class="faq">
                        <details>
                            <summary>¿Puedo descargar contenido para verlo sin conexión?</summary>
                            <p>Sí, puedes descargar contenido de Netflix para verlo sin conexión. Sigue estos pasos:<br>
                            1. Abre la aplicación de Netflix en tu dispositivo móvil o tablet.<br>
                            2. Busca el título que deseas descargar y toca sobre él.<br>
                            3. Busca el icono de descarga (generalmente una flecha apuntando hacia abajo) y toca sobre él.<br>
                            4. El contenido se descargará y podrás verlo sin conexión en la sección "Mis descargas".<br>
                            Ten en cuenta que no todo el contenido está disponible para descargar, y las descargas suelen tener una fecha de vencimiento.</p>
                        </details>
                    </div>
                    <div class="faq">
                        <details>
                            <summary>¿Cómo cambio mi plan de suscripción?</summary>
                            <p>Si deseas cambiar tu plan de suscripción en Netflix, sigue estos pasos:<br>
                            1. Inicia sesión en tu cuenta de Netflix en el sitio web: www.netflix.com.<br>
                            2. Ve a la sección de "Cuenta" o "Mi Cuenta".<br>
                            3. Selecciona la opción "Cambiar plan de streaming".<br>
                            4. Elige el nuevo plan que deseas y sigue las instrucciones para confirmar el cambio.<br>
                            Ten en cuenta que el cambio de plan puede afectar la tarifa mensual y las características disponibles.</p>
                        </details>
                    </div>
                <a href="#">Ir a Preguntas Frecuentes</a>
            </div>
            <div class="section1">
                <h2>Contacto</h2>
                <p>¿Necesitas ayuda adicional? Contáctanos para obtener asistencia personalizada.</p>
                <div class="faq">
                    <details>
                        <summary>¿Necesitas ayuda adicional? Contáctanos para obtener asistencia personalizada.</summary>
                        <p>Si necesitas ayuda adicional o tienes alguna pregunta que no se haya respondido en nuestras preguntas frecuentes, no dudes en ponerte en contacto con nosotros. Nuestro equipo de asistencia está aquí para ayudarte de manera personalizada.</p>
                        <p>Puedes comunicarte con nuestro equipo de soporte a través de diferentes canales:</p>
                        <ul>
                            <li><strong>Chat en vivo:</strong> Habla con uno de nuestros agentes de soporte en tiempo real. Simplemente inicia sesión en tu cuenta y busca el botón de chat en la esquina inferior derecha de la pantalla.</li>
                            <li><strong>Teléfono:</strong> Llámanos al número gratuito 1-800-NETFLIX para hablar directamente con uno de nuestros representantes de atención al cliente.</li>
                            <li><strong>Correo electrónico:</strong> Envíanos un correo electrónico a support@netflix.com y te responderemos lo antes posible.</li>
                        </ul>
                        <p>Estamos comprometidos a brindarte la mejor experiencia posible, y estamos aquí para asegurarnos de que disfrutes al máximo de tu suscripción a Netflix. ¡No dudes en contactarnos si necesitas ayuda!</p>
                    </details>
                </div>
     
          
                <a href="#">Contactar con Soporte</a>
            </div>
            <div class="section1">
                <h2>Configuración de Cuenta</h2>
                <p>Aprende a actualizar tu perfil, cambiar tu contraseña y más.</p>
                <div class="faq">
                    <details>
                        <summary>¿Necesitas ayuda adicional? Contáctanos para obtener asistencia personalizada.</summary>
                        <p>Si necesitas ayuda adicional o tienes alguna pregunta que no se haya respondido en nuestras preguntas frecuentes, no dudes en ponerte en contacto con nosotros. Nuestro equipo de asistencia está aquí para ayudarte de manera personalizada.</p>
                        <p>Puedes comunicarte con nuestro equipo de soporte a través de diferentes canales:</p>
                        <ul>
                            <li><strong>Chat en vivo:</strong> Habla con uno de nuestros agentes de soporte en tiempo real. Simplemente inicia sesión en tu cuenta y busca el botón de chat en la esquina inferior derecha de la pantalla.</li>
                            <li><strong>Teléfono:</strong> Llámanos al número gratuito 1-800-NETFLIX para hablar directamente con uno de nuestros representantes de atención al cliente.</li>
                            <li><strong>Correo electrónico:</strong> Envíanos un correo electrónico a support@netflix.com y te responderemos lo antes posible.</li>
                        </ul>
                        <p>Estamos comprometidos a brindarte la mejor experiencia posible, y estamos aquí para asegurarnos de que disfrutes al máximo de tu suscripción a Netflix. ¡No dudes en contactarnos si necesitas ayuda!</p>
                    </details>
                </div>
                <a href="#">Ir a Configuración de Cuenta</a>
            </div>
        </div>

        </div>


    </main>
    <footer class="mainfooter d-flex direction-column space-between" id="footer">
        <div class="container footer-container flex-start">
            <div class="widgets d-flex space-between">
                <div class="first-widget">
                    <ul>
                        <li class="list-item">Audio and Subtitles</li>
                        <li class="list-item">Media Center</li>
                        <li class="list-item">Privacy</li>
                        <li class="list-item">Contact us</li>
                    </ul>
                </div>
                <div class="second-widget">
                    <ul>
                        <li class="list-item">Help Center</li>
                        <li class="list-item">Cookie</li>
                        <li class="list-item">Jobs</li>
                    </ul>
                </div>
                <div class="third-widget">
                    <ul>
                        <li class="list-item">Audio Description</li>
                        <li class="list-item">Investor Relations</li>
                        <li class="list-item">Legal Notice</li>
                    </ul>
                </div>
                <div class="forth-widget">
                    <ul>
                        <li class="list-item">Gift Card</li>
                        <li class="list-item">Term Of Use</li>
                        <li class="list-item">Corporate Information</li>
                    </ul>
                </div>
            </div>
            <button class="button service">Service Code</button>
            <p class="copyright">@copyright 2020 Vanilacodes, Inc.</p>
        </div>


    </footer>
    <div class="footer-navigation d-flex space-between">
        <a href="browse.html" class="nav-item active">
            <i class="fa fa-home" aria-hidden="true"></i> </br>
            <span>Home</span>
        </a>
        <a href="search.html" class="nav-item">
            <i class="fa fa-search" aria-hidden="true"></i></br>
            Search
        </a>
        <a href="latest.html" class="nav-item">
            <i class="fa fa-film" aria-hidden="true"></i></br>
            Latest
        </a>
        <a href="user-profile/home.html" class="nav-item">
            <i class="fa fa-user" aria-hidden="true"></i></br>
            Account
        </a>
    </div>

    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>

</body>

</html>