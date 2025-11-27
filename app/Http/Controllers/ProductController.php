<?php
// Andrea Viera Hernández
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    // Funcion store que valida los inputs, guarda en las variales despues de validar, 
    // guarda en el csv los datos con comas y redirecciona al formualrio otra vez pero esta vez con el mensaje en estatus
    public function store(Request $request)
    {
        // Validaciones
        request()->validate([
            'nombre-producto' => 'required|string|max:100|min:3',
            'descripcion-producto' => 'required|string|max:1000',
            'unidades' => 'required|integer|min:1',
            'precio' => 'required|max:3000',
            'categoria-producto' => 'required|in:Electrónica,Deporte',
        ]);

        // Guardar datos
        $nombreProducto = $request->input('nombre-producto');
        $descripcionProducto = $request->input('descripcion-producto');
        $unidadesProducto = $request->input('unidades');
        $precioProducto = $request->input('precio');
        $categoriaProducto = $request->input('categoria-producto');

        // crear linea del csv
        $linea = '"' . $nombreProducto . '";"' . $descripcionProducto . '";"' . $categoriaProducto . '";"' . $precioProducto . '";"' . $unidadesProducto . "\"\n";

        // guardar linea en le csv, crea el csv si no existe
        file_put_contents(storage_path('app/productos.csv'), $linea, FILE_APPEND);

        // redirecciona a la ruta en web product.create que devuelve la vista del formulario
       return redirect()->route('product.create')->with('status',  $unidadesProducto);
    }

    // Funcion que devuelve la vista del formulario, entendí que la ruta get en web no debía devolver la vista directamente
    // public function create()
    // {
    //     return view("registerProduct");
    // }
}