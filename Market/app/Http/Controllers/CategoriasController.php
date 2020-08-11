<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
    public function get(Request $request, $id){
      return Categorias::findOrFail($id);
    }
    
    public function list(Request $request){
      return Categorias::get();
    }
    
    public function create(Request $request){
        
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
      ]);

        $categorias = Categorias::create($request->all());    
        return $categorias;
    }
    
    public function update(Request $request, $id){
      
      $validatedData = $request->validate([
        'nombre' => 'required |max:191 ',
        'id_sitio' => 'required |max:20 ',
      ],[
        'nombre.required' => 'nombre is a required field.',
        'nombre.max' => 'nombre can only be 191 characters.',
        'id_sitio.required' => 'id_sitio is a required field.',
        'id_sitio.max' => 'id_sitio can only be 20 characters.',
      ]);

        $categorias = Categorias::findOrFail($id);
        $input = $request->all();
        $categorias->fill($input)->save();
        return $categorias;
    }
    
    public function delete(Request $request, $id){
        $categorias = Categorias::findOrFail($id);
        $categorias->delete();
    }
}
 ?>