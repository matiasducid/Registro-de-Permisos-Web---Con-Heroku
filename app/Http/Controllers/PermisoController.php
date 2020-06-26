<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Permiso; 
use App\Mail\PermisoSolicitado; 

use Illuminate\Support\Facades\DB;

class PermisoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisoFormulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msj = $this->validate($request, [
            'dni' => 'required|max:8',
            'apellido' => 'required',
            'nombre' => 'required',
            'email' => 'required',
            'sector' => 'required',
            'superior' => 'required',
            'dependencia' => 'required',
            'espacio' => 'required',
        ],
        [
            'dni.max' => 'Maximo de caracteres para el nombre son 8',
            'dni.required' => 'El dni es requerido',
            'apellido.required' => 'El apellido es requerido',
            'nombre.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'sector.required' => 'El sector es requerido',
            'superior.required' => 'El superior es requerido',
            'dependencia.required' => 'El superior es requerido',
            'espacio.required' => 'El espacio es requerido',
        ]);

        Permiso::create([
            'dni' => $request->get('dni') ,
            'apellido' => $request->get('apellido') ,
            'nombre' => $request->get('nombre') ,
            'email' => $request->get('email') ,
            'sector' => $request->get('sector') ,
            'superior' => $request->get('superior') ,
            'dependencia' => $request->get('dependencia') ,
            'espacio' => $request->get('espacio') ,
            'aprobado' => False ,

        ]);

        //TODO REcuperar el persimo cuyo dni sea el de request. y pasarselo a permiso solicitado
        $id_permiso = DB::table('permisos')
            ->select('id')
            ->where('dni', $request->get('dni'))
            ->take(1)
            ->get();
        
        $id = $id_permiso[0]->id;

        Mail::to('abigail_lucii@hotmail.com')->queue(new PermisoSolicitado($msj, $id));

        return back()->with('mensaje', 'Permiso Solicitado');
        //return "hola $id";
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
