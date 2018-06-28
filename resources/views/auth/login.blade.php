@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-5 text-center" style="margin: 0 auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-tittle">Acceso</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="cedula">Cedula</label>
                            <input class="form-control" type="text" value="{{ old('cedula') }}" name="cedula" placeholder="Ingresa tu cedula">
                            {!! $errors->first('cedula', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="Ingresa tu contraseña">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>

                        <button class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
