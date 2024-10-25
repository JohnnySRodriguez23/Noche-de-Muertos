<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            background-color: #1a1a1a; /* Fondo oscuro */
            font-family: Arial, sans-serif;
            color: #ff8c00; /* Texto en naranja neón */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #333; /* Fondo del contenedor */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 140, 0, 0.8);
            text-align: center;
            width: 300px; /* Ancho fijo del contenedor */
        }

        h1 {
            color: #ff8c00; /* Naranja neón */
            text-shadow: 0 0 10px #ff8c00;
            margin-bottom: 20px; /* Espaciado inferior */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left; /* Alinear etiquetas a la izquierda */
            color: #ff8c00; /* Texto de las etiquetas en naranja neón */
        }

        input, select {
            width: calc(100% - 20px); /* Ajuste del ancho para el padding */
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ff8c00; /* Borde neón naranja */
            border-radius: 5px;
            background-color: #444; /* Fondo de los inputs */
            color: white; /* Texto de los inputs en blanco */
            transition: border 0.3s;
        }

        input:focus, select:focus {
            border-color: #ffcc00; /* Color de enfoque */
        }

        button {
            background-color: #ff8c00; /* Naranja neón */
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            width: 100%; /* Botón ocupa todo el ancho */
        }

        button:hover {
            background-color: #ffcc00; /* Color de hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro</h1>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="">Selecciona una opción</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>