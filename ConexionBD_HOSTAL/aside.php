<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botón de Redirección</title>
    <style>
        /* Estilo del botón */
        button {
            background-color: #494949; /* Color de fondo */
            color: white; /* Color del texto */
            padding: 5px 32px; /* Tamaño del botón */
            font-size: 17px; /* Tamaño de la fuente */
            border: none; /* Eliminar el borde */
            border-radius: 10px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            transition: background-color 0.3s ease; /* Transición suave al cambiar el color */
        }

        /* Cambia el color cuando el mouse pasa por encima */
        button:hover {
            background-color: #424242; /* Color al pasar el mouse */
        }

        /* Cambia el color cuando el botón está presionado */
        button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666; /* Sombra al presionar */
            transform: translateY(4px); /* Efecto de empujar el botón */
        }
        /* Centrar el botón en la parte superior */
        .container {
            display: CENTER;
            justify-content: left; /* Centrar horizontalmente */
            padding-top: 20px; /* Espacio desde la parte superior */
        }
    </style>
</head>
<body>
    <button type="button" onclick="window.location.href='https://colombia.travel/es/blog/que-hacer-en-narino-7-planes-para-un-fin-de-semana';">
        DESCUBRE NARIÑO EN UN CLICK
    </button> <!-- Botón de redirección -->
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagenes en columnas de cuatro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="grid-container">
        <img class="mi-imagen" src="img/lajas.webp" alt="Imagen 1">
        <img class="mi-imagen" src="img/laguna.jpeg" alt="Imagen 2">
        <img class="mi-imagen" src="img/habi.1.jpeg" alt="Imagen 3">
		<img class="mi-imagen" src="img/habi.2.jpeg" alt="Imagen 4">
    </div>
</body>
</html>
