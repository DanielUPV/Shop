<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function get(Request $request, $id){
      return Productos::findOrFail($id);
    }
    
    public function list(Request $request){
      return Productos::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'stock' => 'required |max:11 ',
        'costo' => 'required |max:8 ',
        'precio' => 'required |max:8 ',
        'estado' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
        'id_categoria' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'stock.required' => 'stock is a required field.',
        'stock.max' => 'stock can only be 11 characters.',
        'costo.required' => 'costo is a required field.',
        'costo.max' => 'costo can only be 8 characters.',
        'precio.required' => 'precio is a required field.',
        'precio.max' => 'precio can only be 8 characters.',
        'estado.required' => 'estado is a required field.',
        'estado.max' => 'estado can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
        'id_categoria.required' => 'id_categoria is a required field.',
        'id_categoria.max' => 'id_categoria can only be 20 characters.',
      ]);

        $productos = Productos::create($request->all());    
        return $productos;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'stock' => 'required |max:11 ',
        'costo' => 'required |max:8 ',
        'precio' => 'required |max:8 ',
        'estado' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
        'id_categoria' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'stock.required' => 'stock is a required field.',
        'stock.max' => 'stock can only be 11 characters.',
        'costo.required' => 'costo is a required field.',
        'costo.max' => 'costo can only be 8 characters.',
        'precio.required' => 'precio is a required field.',
        'precio.max' => 'precio can only be 8 characters.',
        'estado.required' => 'estado is a required field.',
        'estado.max' => 'estado can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
        'id_categoria.required' => 'id_categoria is a required field.',
        'id_categoria.max' => 'id_categoria can only be 20 characters.',
      ]);

        $productos = Productos::findOrFail($id);
        $input = $request->all();
        $productos->fill($input)->save();
        return $productos;
    }
    
    public function delete(Request $request, $id){
        $productos = Productos::findOrFail($id);
        $productos->delete();
    }
}
 ?>