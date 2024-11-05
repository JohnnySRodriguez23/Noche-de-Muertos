<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #1a1a1a; /* Fondo oscuro */
            color: #fff; /* Color del texto blanco */
        }
        .registro-container {
            background-color: #333; /* Fondo del contenedor */
            border: 2px solid #00ff00; /* Bordes neón */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px #00ff00; /* Sombra neón */
            text-align: center; /* Centrando texto */
        }
        input, select {
            width: calc(100% - 20px); /* Ajustando el ancho */
            margin: 10px 0; /* Espaciado entre elementos */
            padding: 10px;
            border: 1px solid #00ff00; /* Bordes de los campos */
            border-radius: 5px;
            background-color: #444; /* Fondo de los campos */
            color: #fff; /* Color del texto en campos */
        }
        button {
            background-color: #00ff00; /* Botón verde neón */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #000; /* Texto negro en el botón */
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #00cc00; /* Color del botón al pasar el ratón */
        }
        h1, h2 {
            color: #00ff00; /* Color de los títulos en neón */
        }
    </style>
</head>
<body>
    <div class="registro-container">
        <h1>Registro de Usuario</h1>
        <form action="" method="GET">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required>
            <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required>
            <select name="genero" required>
                <option value="">Seleccione su género</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
            <input type="email" name="correo" placeholder="Correo Electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
        </form>

        <div class="registro">
            <h2>Registro Guardado:</h2>
            <p>
                <?php
                    if (isset($_GET['nombre']) && isset($_GET['apellidoPaterno']) && isset($_GET['apellidoMaterno']) && isset($_GET['genero']) && isset($_GET['correo'])) {
                        echo "Nombre: " . htmlspecialchars($_GET['nombre']) . "<br>";
                        echo "Apellido Paterno: " . htmlspecialchars($_GET['apellidoPaterno']) . "<br>";
                        echo "Apellido Materno: " . htmlspecialchars($_GET['apellidoMaterno']) . "<br>";
                        echo "Género: " . htmlspecialchars($_GET['genero']) . "<br>";
                        echo "Correo: " . htmlspecialchars($_GET['correo']) . "<br>";
                    }
                ?>
            </p>
        </div>
    </div>
</body>
</html>