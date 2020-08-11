<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;

class ServiciosController extends Controller
{
    public function get(Request $request, $id){
      return Servicios::findOrFail($id);
    }
    
    public function list(Request $request){
      return Servicios::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'precio' => 'required |max:8 ',
        'estado' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
        'id_categoria' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'precio.required' => 'precio is a required field.',
        'precio.max' => 'precio can only be 8 characters.',
        'estado.required' => 'estado is a required field.',
        'estado.max' => 'estado can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
        'id_categoria.required' => 'id_categoria is a required field.',
        'id_categoria.max' => 'id_categoria can only be 20 characters.',
      ]);

        $servicios = Servicios::create($request->all());    
        return $servicios;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'precio' => 'required |max:8 ',
        'estado' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
        'id_categoria' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'precio.required' => 'precio is a required field.',
        'precio.max' => 'precio can only be 8 characters.',
        'estado.required' => 'estado is a required field.',
        'estado.max' => 'estado can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
        'id_categoria.required' => 'id_categoria is a required field.',
        'id_categoria.max' => 'id_categoria can only be 20 characters.',
      ]);

        $servicios = Servicios::findOrFail($id);
        $input = $request->all();
        $servicios->fill($input)->save();
        return $servicios;
    }
    
    public function delete(Request $request, $id){
        $servicios = Servicios::findOrFail($id);
        $servicios->delete();
    }
}
 ?>