<!DOCTYPE html>
<html>
<!-- Andrea Viera Hernández -->
    <h1>Bienvenido a la Gestión de Productos.</h1>
    <!-- Imagen obicada en public -->
    <img src="{{' captura.png' }}" alt="captura">
    <p>Esta aplicación permite gestionar el inventario de nuestra tienda de forma eficiente y rápida.</p>
    <!-- Enlace que gracias al href, referencia a la ruta llamada product.create que muesta el blade -->
    <p><a href="{{ route('product.create') }}">Ir al formulario</a></p> 
</html>