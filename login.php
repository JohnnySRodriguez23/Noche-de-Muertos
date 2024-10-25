<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Día de Muertos</title>
    <style>
        body {
            background-color: #2d2d2d; /* Fondo oscuro */
            font-family: Arial, sans-serif;
            color: #fff; /* Color de texto en blanco */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura completa de la ventana */
            margin: 0; /* Sin margen */
        }

        .container {
            background-color: #4b0e59; /* Color morado */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 140, 0, 0.8); /* Sombra vibrante */
            text-align: center; /* Centramos el texto */
            width: 300px; /* Ancho del contenedor */
        }

        h1 {
            color: #ffcc00; /* Color amarillo */
            text-shadow: 2px 2px 5px rgba(255, 204, 0, 0.8); /* Sombra para el título */
            margin-bottom: 20px; /* Espacio debajo del título */
        }

        label {
            display: block;
            margin: 10px 0 5px; /* Margen para las etiquetas */
            color: #ffcc00; /* Color de las etiquetas */
            text-align: left; /* Alinear etiquetas a la izquierda */
        }

        input {
            width: calc(100% - 20px); /* Ajuste del ancho para el padding */
            padding: 10px;
            margin-bottom: 15px; /* Espacio debajo de los inputs */
            border: 2px solid #ffcc00; /* Borde amarillo */
            border-radius: 5px; /* Bordes redondeados */
            background-color: #333; /* Fondo de los inputs */
            color: #fff; /* Texto de los inputs en blanco */
            transition: border 0.3s; /* Transición suave en el borde */
        }

        input:focus {
            border-color: #ff8c00; /* Color de borde al enfocar */
        }

        button {
            background-color: #ff8c00; /* Color naranja */
            border: none; /* Sin borde */
            padding: 10px 20px; /* Espaciado */
            color: #fff; /* Texto en blanco */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambiar cursor */
            transition: background 0.3s; /* Transición suave en el fondo */
            width: 100%; /* Botón ocupa todo el ancho */
        }

        button:hover {
            background-color: #ffcc00; /* Color de hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="login.php" method="POST">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <button type="submit">Acceder</button>
        </form>
    </div>
</body>
</html>