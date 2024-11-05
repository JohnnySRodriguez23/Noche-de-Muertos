<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000000; /* Fondo negro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #FF4500; /* Color naranja neón */
            text-align: center; /* Centrar texto */
        }
        .login-container {
            background-color: #1a1a1a; /* Color gris oscuro para el contenedor */
            padding: 20px;
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 15px rgba(255, 69, 0, 0.5); /* Sombra con color naranja neón */
            width: 300px;
            border: 2px solid #FF4500; /* Borde naranja neón */
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #FF4500; /* Título en naranja neón */
        }
        .login-container label {
            display: block; /* Asegura que las etiquetas estén en su propia línea */
            margin: 10px 0 5px; /* Espaciado entre la etiqueta y el input */
            color: #FF4500; /* Color de las etiquetas */
        }
        .login-container input {
            width: calc(100% - 22px); /* Ajusta el ancho teniendo en cuenta el padding y el borde */
            padding: 10px;
            margin-bottom: 10px; /* Espacio entre inputs */
            border: 2px solid #FF4500; /* Bordes en naranja neón */
            border-radius: 4px;
            background-color: #333333; /* Color de fondo para los inputs */
            color: #FF4500; /* Texto en naranja neón */
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #FF4500; /* Botón en naranja neón */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        .login-container button:hover {
            background-color: #FF6347; /* Color más claro al pasar el mouse */
        }
        .message {
            margin-top: 20px;
            color: #FF4500; /* Color naranja neón para el mensaje */
            font-weight: bold;
            display: none; /* Oculta el mensaje inicialmente */
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Registro de Usuario</h2>
    <form id="registrationForm">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Registrar</button>
    </form>
    <div class="message" id="message">¡Registro exitoso!</div>
</div>

<script>
    // Captura el formulario y agrega un evento de escucha
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        // Obtiene los valores del correo y la contraseña
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Guarda las credenciales en localStorage
        localStorage.setItem('email', email);
        localStorage.setItem('password', password);

        // Muestra el mensaje de éxito
        const messageElement = document.getElementById('message');
        messageElement.style.display = 'block'; // Muestra el mensaje
        messageElement.innerText = '¡Registro exitoso!';

        // Limpia el formulario
        document.getElementById('registrationForm').reset();
    });
</script>

</body>
</html>