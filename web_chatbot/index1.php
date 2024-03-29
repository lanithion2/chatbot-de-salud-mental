<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stilochatbot.css   ">
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="mt-3" style="color: white">Hola Soy EmpathyEcho ¿En que puedo ayudarte?</h2>
            <div class="tenor-gif-embed" data-postid="21715304" data-share-method="host" data-aspect-ratio="1.77778" data-width="100%"><a href="https://tenor.com/view/big-hero-big-hero-big-hero6the-series-big-hero6-gif-21715304">Big Hero GIF</a>from <a href="https://tenor.com/search/big-gifs">Big GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            <!--<img src="./images/baymax.gif" class="baymax">-->
            <div style="display: flex; justify-content: center; align-items: center">
                <span style="display: none" id="barra">
                    <img style="width: 286px" src="./imagen/barra.gif" alt="Procesando..." />
                </span>
            </div>
            <div class="container">
                <div id="chat-container" class="textarea">
                    <!-- Aquí se mostrarán las preguntas y respuestas -->
                </div>
                <div class="input-group">
                    <input id="input-question" class="form-control" type="text" placeholder="Realiza una pregunta">
                    <button id="submit-button" class="submit-button">
                      <span>Enviar</span>
                     <div class="transition"></div>
                        <!--<img src="./imagen/arrow-button.png" height="40">-->
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handler para enviar la pregunta al hacer Enter en el input
            $('#input-question').keypress(function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    var pregunta = $(this).val();
                    if (validarCampos(pregunta)) {
                        realizarPregunta(pregunta);
                    }
                }
            });

            // Handler para enviar la pregunta al hacer clic en el botón
            $('#submit-button').click(function() {
                var pregunta = $('#input-question').val();
                if (validarCampos(pregunta)) {
                    realizarPregunta(pregunta);
                }
            });
        });

        function validarCampos(pregunta) {
            if (pregunta === '') {
                alert('Ingresa una pregunta antes de enviarla.');
                return false;
            }
            return true;
        }

        function realizarPregunta(pregunta) {
            $("#barra").show();
            // Realizar la solicitud al servidor PHP
            $.ajax({
                type: "POST",
                url: "chatAPI.php",
                data: {
                    mensaje: pregunta
                },
                success: function(respuesta) {
                    $("#barra").hide();
                    // Agregar la pregunta y respuesta al contenedor de chat
                    var preguntaHtml = `<strong>😎Tu:</strong> ` + pregunta;
                    var respuestaHtml = '<strong>🤖EmphatyEcho:</strong> ' + respuesta;
                    // Obtén una referencia al elemento del div
                    var chatContainer = $('#chat-container');
                    chatContainer.append('<p>' + preguntaHtml + '</p>');
                    chatContainer.append('<p>' + respuestaHtml + '</p>');

                    // Limpiar el input y desplazarse al final del contenedor de chat
                    $('#input-question').val('');
                    chatContainer.scrollTop(chatContainer[0].scrollHeight);
                }
            });
        }
    </script>
</body>

</html>