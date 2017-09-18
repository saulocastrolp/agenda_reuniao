@extends('adminlte::page')

@section('title', 'CalendarApp')

@section('content_header')
    <h1>Perfil  </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    Dados do Usuário    
                </div>
                {!! Form::model('UserController@update', ['method' => 'PATCH','route' => ['user.update',  Auth::user()->id]]) !!}
                
                    <div class="box-body">
                        <label>Nome</label>
                        {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}

                        <label>Email</label>
                        
                        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            Salvar
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop