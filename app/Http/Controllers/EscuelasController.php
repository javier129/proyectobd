<?php

namespace App\Http\Controllers;

use App\Escuelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EscuelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======

        $cantidad = Escuelas::cantidad();
        $extensiones = Escuelas::getExtensiones();
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        $nombre = $request->input('nombre');
        $id_facultad =$request->input('facultades');
        $id_extension =$request->input('extensiones');
        Escuelas::addNew($nombre,$id_facultad,$id_extension);
        return response()->json('ok');
>>>>>>> 38a06fd... parteadolfredo
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $query = $request->input('query');
        $rows = Escuelas::buscar($query);
        $output = <<<EOT
            <div class="list-group">
EOT;
        foreach($rows as $result){
            $output.=<<<EOT
            <div class="list-group-item">
                <a href="#" class="search-result" data-id="$result->id">$result->nombre</a><br>
                <span>Facultad <b>$result->facultad</b></span><br>
                <span>Extension <b>$result->extension</b></span>
            </div>
EOT;
        }
        $output.=<<<EOT
            </div>
EOT;

        return response()->json($output);
>>>>>>> 38a06fd... parteadolfredo
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escuelas  $escuelas
     * @return \Illuminate\Http\Response
     */
    public function show(Escuelas $escuelas)
    {
<<<<<<< HEAD
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escuelas  $escuelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuelas $escuelas)
    {
        //
    }

=======
        $id = $request->input('id');
        $record = Escuelas::getItem($id);

        $output = <<<EOT
            <div>
                <span>Escuela: <b>$record->nombre</b></span><br>
                <span>Facultad: <b>$record->facultad</b></span><br>
                <span>Extension: <b>$record->extension</b></span><br>
                
            </div>
EOT;

        return response()->json($output);
    }

>>>>>>> 38a06fd... parteadolfredo
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escuelas  $escuelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuelas $escuelas)
    {
<<<<<<< HEAD
        //
=======
        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $facultad = $request->input('facultad');
        $extension = $request->input('extension');
        Escuelas::editar($id,$nombre,$facultad,$extension);
        return response()->json('hey');
>>>>>>> 38a06fd... parteadolfredo
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escuelas  $escuelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuelas $escuelas)
    {
        //
    }
}
