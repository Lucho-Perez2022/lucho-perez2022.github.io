<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page para Workshops</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Enlace a Google Fonts -->
    <style>
        /* Importar fuente Amasis MT Pro Black */
        @font-face {
            font-family: 'Amasis MT Pro';
            src: url('fonts/AmasisMTProBlack.ttf') format('truetype'); /* Asegúrate de que la ruta sea correcta */
            font-weight: 900;
            font-style: normal;
        }

        /* Variables de diseño */
        :root {
            --primary-color: #2A52BE; /* Azul moderno */
            --secondary-color: #FFD600; /* Amarillo vibrante */
            --background-color: #F9FAFB; /* Fondo claro */
            --text-color: #1E1E2C; /* Texto oscuro */
            --accent-color: #E63946; /* Rojo coral */
            --button-color: #4CAF50; /* Verde botones */
            --section-bg-color: #F3F4F6; /* Fondo secciones suaves */
            --footer-bg-color: #2A2A2A; /* Fondo del footer */
            --dark-bg-color: #333333; /* Fondo oscuro para secciones */
            --light-text-color: white; /* Texto blanco */
            --testimonial-bg-color: #f7f7f7; /* Fondo claro para testimonios */
        }

        /* Estilos globales */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif; /* Cambia la fuente a Roboto */
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.8;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            text-align: center;
            padding: 100px 20px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            
        }

        header h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 700;
        }

        header p {
            font-size: 1.8rem;
            margin-top: 15px;
            font-weight: 400;
        }

        .timer-wrapper {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--secondary-color);
            color: var(--primary-color);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            z-index: 1000;
        }

        .timer-wrapper span {
            font-size: 1.2rem;
            font-weight: 700;
            display: block;
        }

        .timer {
            font-size: 2rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .video-section {
            margin: 30px auto;
            max-width: 800px;
            text-align: center;
        }

        .video-section iframe {
            width: 100%;
            height: 450px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            text-align: center; /* Texto centrado */
        }

        .button {
            display: inline-block;
            background: var(--button-color);
            color: white;
            padding: 15px 25px;
            font-size: 1.5rem;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 15px 10px;
            transition: background 0.3s;
        }

        .button:hover {
            background: #388E3C;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        h3 {
            font-size: 2rem;
            margin: 15px 0;
        }

        p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 20px;
        }

        .section {
            margin: 40px 0;
            padding: 20px;
            background: var(--section-bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2mm solid;
            border-image: linear-gradient(45deg, var(--primary-color), var(--secondary-color)) 1;
        }

        .dark-section {
            margin: 40px 0;
            padding: 20px;
            background: var(--dark-bg-color);
            color: var(--light-text-color);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .highlight {
            font-size: 3rem;
            color: white;
            background-color: var(--button-color);
            padding: 10px 20px;
            border-radius: 50%; /* Círculo */
            display: inline-block;
            margin: 20px 0;
            transition: transform 0.3s;
        }

        .highlight:hover {
            transform: scale(1.1); /* Efecto de zoom */
        }

        .testimonial {
            background-color: var(--testimonial-bg-color);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: transform 0.3s; /* Agregar transición para efecto flotante */
        }

        .testimonial:hover {
            transform: scale(1.05); /* Efecto de flotación */
        }

        .testimonial h3 {
            margin: 0;
        }

        .testimonial p {
            font-style: italic;
            margin: 10px 0;
        }

        .testimonial-icon {
            position: absolute;
            top: -10px;
            left: 10px;
            font-size: 30px; /* Ajusta el tamaño del icono */
            color: var(--primary-color); /* Color del icono */
        }

        footer {
            background: var(--footer-bg-color);
            color: white;
            text-align: center;
            padding: 40px 0;
            margin-top: 50px;
        }

        footer a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }

        footer a:hover {
            color: var(--accent-color);
        }

        /* Responsividad */
        @media (max-width: 768px) {
            header h1 {
                font-size: 3rem;
            }

            header p {
                font-size: 1.5rem;
            }

            .timer {
                font-size: 1.5rem;
            }

            .button {
                font-size: 1.2rem;
            }

            h2 {
                font-size: 2rem;
            }

            h3 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
    <script>
        // Función de cronómetro
        document.addEventListener("DOMContentLoaded", function () {
            const timerElement = document.getElementById("timer");
            let time = 15 * 60; // Tiempo en segundos (15 minutos)

            function updateTimer() {
                const minutes = Math.floor(time / 60);
                const seconds = time % 60;
                timerElement.textContent = `${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
                time--;

                if (time >= 0) {
                    setTimeout(updateTimer, 1000);
                }
            }

            updateTimer();
        });
    </script>
</head>
<body>
    <header>
        <h1>¿Quieres hacer un workshop rápido y no sabes por dónde empezar?</h1>
        <p>¡Lanza tu workshop como un PRO en tiempo récord!</p>
        <div class="timer-wrapper">
            <span>TIEMPO LIMITADO</span>
            <div class="timer" id="timer">15:00</div>
        </div>
    </header>

    <div class="video-section">
        <h2>Conoce Más</h2>
        <iframe src="https://public-files.gumroad.com/cf9tn8hc0cntroczm7tly89r59c8" allowfullscreen></iframe>
    </div>

    <div class="container">
        <h2>Crea presentaciones que impacten a tu audiencia</h2>
        <p>Sin saber de diseño ni tener que invertir mucho tiempo en el formato.</p>
        <h3 style="text-decoration: line-through;">Valor: $353 USD</h3>
        <div class="highlight">$67 USD</div> <!-- Valor dentro de un círculo verde -->
        <a href="https://camilahokinzy.gumroad.com/l/Hokinz" class="button">¡Quiero crear mi workshop como un PRO!</a>

        <div class="section">
            <h2>Nuestro kit te ayudará a</h2>
            <p>Guiarte paso a paso, explicándote lo que debes hacer y qué herramientas usar para crear un workshop sin haber tenido experiencia previa.</p>
            <h3>PRÁCTICO Y ESTRATÉGICO</h3>
            <p>Obtendrás plantillas orientadas a la alta retención de información, estructura de venta y conversión para no perder tiempo.</p>
            <h3>Usar la IA a tu favor</h3>
            <p>Aprenderás a crear tus propias imágenes con IA para tus presentaciones, videos y cualquier material de venta sin tener problemas de copyright.</p>
        </div>

        <div class="section">
            <h2>¿Por qué complicarlo más?</h2>
            <p>Transforma tu conocimiento en experiencias de aprendizaje memorables sin perderte en un mar de opciones.</p>
        </div>

        <div class="section">
            <h2>Te damos 2 RAZONES por las que todo experto debe crear workshops</h2>
            <h3>#1 Llega a una audiencia más amplia</h3>
            <p>Conecta con tu audiencia a un nivel más profundo y construye relaciones duraderas.</p>
            <h3>#2 Convierte tu pasión en un negocio rentable</h3>
            <p>Genera ingresos recurrentes ofreciendo workshops en línea o presenciales.</p>
        </div>

        <div class="section">
            <h2>Este toolkit es para TI, si...</h2>
            <p>Eres un experto que quiere compartir su conocimiento y construir una comunidad en torno a su marca.</p>
            <p>Necesitas una solución rápida y efectiva para crear workshops profesionales sin sacrificar tu creatividad.</p>
            <p>Quieres maximizar tu alcance y generar ingresos de manera sostenible.</p>
        </div>

        <h2>¿Qué incluye este kit de herramientas infalible?</h2>
        <ul style="list-style: none; padding: 0;">
            <li>Slides optimizadas - Plantilla en Canva</li>
            <li>Estructura para vender el siguiente producto al final del workshop</li>
            <li>Fácil edición en cualquier dispositivo</li>
            <li>Personalizable con texto indicativo en cada Slide</li>
            <li>Tutorial de uso y transiciones pre-diseñadas</li>
            <li>Guía para crear tu primer Workshop de éxito - Ebook PDF</li>
        </ul>

        <a href="https://camilahokinzy.gumroad.com/l/Hokinz" class="button">¡Quiero crear mi workshop como un PRO!</a>
    </div>

    <!-- Sección de Testimonios -->
    <div class="container">
        <h2>Testimonios de Clientes</h2>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">🌟</div>
            <!-- <h3>Testimonio 1</h3> -->
            <p>"Este toolkit ha simplificado la forma en que organizo mis workshops. ¡Es una herramienta imprescindible!" - Ana P.</p>
        </div>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">🎉</div>
            <!-- <h3>Testimonio 2</h3> -->
            <p>"Las plantillas son increíbles. He aumentado mis ingresos desde que empecé a usar este kit." - Juan P.</p>
        </div>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">✨</div>
            <!-- <h3>Testimonio 3</h3> -->
            <p>"Gracias a este kit, ahora tengo la confianza para presentar mis ideas de manera efectiva." - Marta L.</p>
        </div>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">👍</div>
            <!-- <h3>Testimonio 4</h3> -->
            <p>"Los diseños son modernos y fáciles de usar. Hice mi primer workshop en un día." - Carlos T.</p>
        </div>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">🌈</div>
            <!-- <h3>Testimonio 5</h3> -->
            <p>"Gracias a este kit, ahora puedo crear contenido profesional sin esfuerzo." - Ana L.</p>
        </div>
        <div class="testimonial" style="text-align: center;"> <!-- Centrando testimonios -->
            <div class="testimonial-icon">🚀</div>
            <!-- <h3>Testimonio 6</h3> -->
            <p>"El mejor recurso que he encontrado para lanzar mi propia marca de workshops." - Pedro G.</p>
        </div>
    </div>

    <footer>
        <p>© 2024 | <a href="mailto:camila.hokinz@gmail.com">Contáctanos</a></p>
    </footer>
</body>
</html>
