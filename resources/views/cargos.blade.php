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
    @component('componentes.search')
        @slot('mod', 'cargos')
    @endcomponent
@stop

