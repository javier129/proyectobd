@extends('layouts.menu')
@section('link-to-js')
    <script type="text/javascript" src="{!! asset('js/cargos.js') !!}"></script>
@stop
@section('usuario')
    <a href="">Enmanuel</a>
@stop
@section('contenido-externo')

    @component('componentes.addnew')
        @slot('header', 'Cargos')
        @slot('count', '1')
    @endcomponent
    <br>
    @component('componentes.search')
        @slot('mod', 'cargos')
    @endcomponent
    <br>
    @component('componentes.paneladdnew')
        @slot('mod', 'cargos')
        @slot('inputs')
            <div class="form-group">
                <label for="input_1">Nombre</label>
                <input type="text" class="form-control" id="input_1" name="input_1">
            </div>
            <div class="form-group">
                <label for="input_2">Codigo</label>
                <input type="text" class="form-control" id="input_2" name="input_2">
            </div>
        @endslot
    @endcomponent
@stop

