<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
        <center>Vista Crear</center>

        <br>
        <form action="{{ route('productos.formdata')}}" method="POST">
            @csrf
            <!-- inputs -->
            <label>
                Nombre:
                <input type="text" name="nombre">
            </label><br>
            <label>
                Precio:
                <input type="text" name="precio">
            </label><br>
             <label>
                Existencias:
                <input type="text" name="existencias">
            </label><br>
            <button type="submit">Enviar</button>
            <br>
        </form>
</body>
</html>