<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Notas</title>
</head>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin-bottom: 20px;
    
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
    
}

button:hover {
    background-color: #0056b3;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}


</style>
<body>

    <form method="POST" action="calificaciones.php">
        Nombre: <input type="text" name="Nombre"><br>
        Nota 1: <input type="number" name="1tr"><br>
        Nota 2: <input type="number" name="2tr"><br>
        Nota 3: <input type="number" name="3tr"><br>
        <button type="submit" name="boton">Añadir</button>
    </form>


    <form method="POST" action="">
        <button type="submit" name="sesion">Borrar todo</button>
    </form>
</body>
</html>