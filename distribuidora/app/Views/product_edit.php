<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <!-- Enlace dinámico al archivo CSS -->
    <link rel="stylesheet" href="<?= base_url('estilos/editar.css') ?>">
    <link rel="stylesheet" href="./estilos/editar.css">
</head>

<body>

    <div class="container">
        <h1>Editar Producto</h1>

        <form action="<?= site_url('producto/actualizar/' . $producto['id']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?= esc($producto['nombre']) ?>" required>
            </div>

            <div class="form-group">
                <label>Descripción:</label>
                <input type="text" name="descripcion" value="<?= esc($producto['descripcion']) ?>">
            </div>

            <div class="form-group">
                <label>Stock:</label>
                <input type="number" name="stock" value="<?= esc($producto['stock']) ?>">
            </div>

            <div class="form-group">
                <label>Precio:</label>
                <input type="number" step="0.01" name="precio" value="<?= esc($producto['precio']) ?>" required>
            </div>

            <button type="submit" class="btn-submit">Guardar Cambios</button>
        </form>

        <a href="<?= site_url('producto') ?>" class="btn-back">← Volver al listado</a>
    </div>

</body>

</html>