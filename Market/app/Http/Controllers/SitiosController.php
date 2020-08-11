<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitios;

class SitiosController extends Controller
{
    public function get(Request $request, $id){
      return Sitios::findOrFail($id);
    }
    
    public function list(Request $request){
      return Sitios::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'direccion' => 'required |max:191 ',
        'url' => 'required |max:191 ',
        'img' => 'required ',
        'latitud' => 'required |max:191 ',
        'longitud' => 'required |max:191 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'direccion.required' => 'direccion is a required field.',
        'direccion.max' => 'direccion can only be 191 characters.',
        'url.required' => 'url is a required field.',
        'url.max' => 'url can only be 191 characters.',
        'img.required' => 'img is a required field.',
        'latitud.required' => 'latitud is a required field.',
        'latitud.max' => 'latitud can only be 191 characters.',
        'longitud.required' => 'longitud is a required field.',
        'longitud.max' => 'longitud can only be 191 characters.',
      ]);

        $sitios = Sitios::create($request->all());    
        return $sitios;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'descripcion' => 'required |max:191 ',
        'direccion' => 'required |max:191 ',
        'url' => 'required |max:191 ',
        'img' => 'required ',
        'latitud' => 'required |max:191 ',
        'longitud' => 'required |max:191 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'descripcion.required' => 'descripcion is a required field.',
        'descripcion.max' => 'descripcion can only be 191 characters.',
        'direccion.required' => 'direccion is a required field.',
        'direccion.max' => 'direccion can only be 191 characters.',
        'url.required' => 'url is a required field.',
        'url.max' => 'url can only be 191 characters.',
        'img.required' => 'img is a required field.',
        'latitud.required' => 'latitud is a required field.',
        'latitud.max' => 'latitud can only be 191 characters.',
        'longitud.required' => 'longitud is a required field.',
        'longitud.max' => 'longitud can only be 191 characters.',
      ]);

        $sitios = Sitios::findOrFail($id);
        $input = $request->all();
        $sitios->fill($input)->save();
        return $sitios;
    }
    
    public function delete(Request $request, $id){
        $sitios = Sitios::findOrFail($id);
        $sitios->delete();
    }
}
 ?>