@extends('layouts.menu')

@section('content')
    Hey {{ auth()->user()->nombre }}


@endsection