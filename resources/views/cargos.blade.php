@extends('layouts.menu')

@section('usuario')
    <a href="">Enmanuel</a>
@stop
@section('contenido-externo')
    {{--Componente para agregar nuevo--}}
    @component('componentes.addnew')
        @slot('header', $header)
        @slot('count', $count)
    @endcomponent
    <br>
    {{--Componente de la barra de busqueda--}}
    @component('componentes.search')
        @slot('mod', $mod)
    @endcomponent
    <br>

    {{--Componente del panel para agregar nuevo registro--}}
    @component('componentes.paneladdnew')
        @slot('mod', $mod)
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


    {{--Componente para el view del panel--}}
    @component('componentes.panelview')
        @slot('mod', $mod);
    @endcomponent

    {{--Componente para el edit de un registro--}}
    @component('componentes.paneledit')
        @slot('mod', $mod)
        @slot('inputs')
            <div class="form-group">
                <label for="input_edit_1">Nombre</label>
                <input type="text" class="form-control" id="input_edit_1" name="input_edit_1">
            </div>
            <div class="form-group">
                <label for="input_edit_2">Codigo</label>
                <input type="text" class="form-control" id="input_edit_2" name="input_edit_2">
            </div>
        @endslot
    @endcomponent
@stop

