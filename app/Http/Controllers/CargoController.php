<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Cargo::cantidad();
        return view('cargos')->with(array(
            'mod' => 'cargos',
            'count' => $count,
            'header' => 'Cargos'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $query = $request->input('input_1');
        return response()->json($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = $request->input('query');
        $cargos = <<<EOT
            <div class="list-group">
                <a href="#" class="list-group-item search-result" data-id="1">Presidente</a>
                <a href="#" class="list-group-item search-result" data-id="2">Consejero</a>
            </div>
EOT;
        return response()->json($cargos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id');
        if($id==1) {
            $output = <<<EOT
            <label>Nombre del cargo</label><br>
            <label for=""> Presidente</label><br>
            <label for="">Puto el que lo lea</label>
EOT;
        }
        else{
            $output = <<<EOT
            <label>Nombre del cargo</label><br>
            <label for="">Consejero</label><br>
            <label for="">Puto el que lo lea</label>
EOT;
        }
        return response()->json($output);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return response()->json('hey');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $id = $request->input('id');

        return response()->json($id);
    }
}
