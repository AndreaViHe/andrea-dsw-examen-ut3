<!DOCTYPE html>
<html lang="es">
<!-- Andrea Viera Hernández -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
</head>
<body>
    <h1>Registrar Nuevo Producto</h1>
    
    <!-- Muestra un mensaje con las unidades traidas con el redirect, {{session('status')}} debería mostrar las unidades -->
    @if (session('status'))
    <div>
        <p>Se ha registrado: {{session('status')}} unidades</p>
    </div>
    @endif

    <!-- Formulario con action="/product" y method="POST" para que laravel lo encuentre en web.php -->
    <form action="/product" method="POST">
        @csrf
        <label for="nombre-producto">Nombre del Producto:</label><br>
        <input type="text" id="nombre-producto" name="nombre-producto" required><br><br>

        <label for="descripcion-producto">Descripción del Producto:</label><br>
        <textarea type="text" id="descripcion-producto" name="descripcion-producto" required></textarea><br><br>

        <label for="unidades">Unidades del Producto:</label><br>
        <input type="number" id="unidades" name="unidades" step="0.01" required><br><br>

        <label for="precio">Precio del Producto:</label><br>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <label for="categoria-producto">Categoría del Producto:</label><br>
        <select id="categoria-producto" name="categoria-producto" required>
            <option value="Electrónica">Electrónica</option>
            <option value="Deporte">Deporte</option>
        </select><br><br>

        <input type="submit" value="Guardar Producto">
    </form>
</body>
</html>