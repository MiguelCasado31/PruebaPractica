<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta Comunidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Agregar Nueva Comunidad</h1>
        <form action="../controlador/controlador_comunidad.php" method="post">
            <div class="">
                <input type="hidden" name="accion" value="alta">
                <label for="nombre" class="form-label">Nombre de la comunidad:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="direccion" class="form-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div>
                <label for="poblacion" class="form-label">Población:</label>
                <input type="text" class="form-control" id="poblacion" name="poblacion" required>
            </div>
            <div class="mb-3">
                <label for="id_administrador" class="form-label">id_administrador:</label>
                <input type="number" class="form-control" id="id_administrador" name="id_administrador" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>

</html>