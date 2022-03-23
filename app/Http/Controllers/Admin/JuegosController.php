<?php

namespace App\Http\Controllers\Admin;

use App\Models\Juegos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juegos::paginate(10);
        return view("admin.juegos.index", compact("juegos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juego = new Juegos;
        $title = __("Añadir Juego");
        $textButton = __("Añadir");
        $route = route("juegos.store");
        return view("admin.juegos.create", compact("title", "textButton", "route", "juego"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "Nombre"=>"required|unique:juegos",
            "Descripcion" => "required|string",
            "Genero" => "required|string",
            "Fecha_salida" => "required|string",
            "Valoracion" => "required|min:0|max:10|integer",
            "Imagen"=> "required|image|mimes:jpg,gif,png,jpeg|"
           
        ]);
        Juegos::create([
            "Nombre"=>$request->input("Nombre"),
            "Descripcion" => $request->input("Descripcion"),
            "Genero" => $request->input("Genero"),
            "Fecha_salida" => $request->input("Fecha_salida"),
            "Valoracion" => $request->input("Valoracion"),
            'Imagen'=>$request->file("Imagen")->store('','images'),
        ]);
        return redirect(url("admin/juegos"))
        ->with("success", __("Juego añadido"));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $juego =Juegos::find($id);
        $update = true;
        $title = ("Editar Serie");
        $textButton = ("Actualizar");
        $route = route("juegos.update", $juego -> id);
        return view("admin.juegos.edit", compact("update", "title", "textButton", "route", "juego"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) 
    {

        $this->validate($request, [
            "Nombre"=>"required|unique:juegos",
            "Descripcion" => "required|string",
            "Genero" => "required|string",
            "Fecha_salida" => "required|string",
            "Valoracion" => "required|min:0|max:10|integer",
            "Imagen"=> "required|image|mimes:jpg,gif,png,jpeg|"
           
        ]);


        $juego = Juegos::find($id);
        $juego-> Nombre = $request->get('Nombre');
        $juego-> Descripcion = $request->get('Descripcion');
        $juego-> Genero = $request->get('Genero');
        $juego-> Fecha_salida = $request->get('Fecha_salida');
        $juego-> Valoracion = $request->get('Valoracion');
        if($request->hasFile('Imagen')){
            Storage::disk('images')->delete('images/'.$juego->Imagen);
            $juego-> Imagen=$request->file("Imagen")->store('','images');
        }

        $juego-> save();
        return redirect(url("admin/juegos"))
        ->with("success", __("Juego actualizado!"));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juegos $juego)
    {
        $juego->delete();
        return back()->with("success", __("¡Juego eliminado!"));
    }

    public function _construct()
    {
        $this->middleware("auth");
    }
}
