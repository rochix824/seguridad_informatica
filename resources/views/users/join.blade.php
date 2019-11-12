<?php

    use App\Models\Team;

?>
@extends('layouts.main')

@section('title', 'Registrarse a la Carrera')
@section('main')
    <h1>Completá tus datos para inscribirte a la carrera</h1>

    <form action="{{ url('/join') }}" method="post" >
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}">
            @if($errors->has('last_name'))
                <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="birthday">Fecha de Nacimiento</label>
            <input type="date" id="birthday" name="birthday" class="form-control" value="{{ old('birthday') }}">
            @if($errors->has('birthday'))
                <div class="alert alert-danger">{{ $errors->first('birthday') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Domicilio</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}">
            @if($errors->has('address'))
                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="dni">DNI/Pasaporte</label>
            <input type="text" id="dni" name="dni" class="form-control" value="{{ old('dni') }}">
            @if($errors->has('dni'))
                <div class="alert alert-danger">{{ $errors->first('dni') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="nationality">Nacionalidad</label>
            <input type="text" id="nationality" name="nationality" class="form-control" value="{{ old('nationality') }}">
            @if($errors->has('nationality'))
                <div class="alert alert-danger">{{ $errors->first('nationality') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
            @if($errors->has('phone'))
                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="event_question">¿Cómo te enteraste del evento?</label>
            <textarea id="event_question" name="event_question" class="form-control">{{ old('event_question') }}</textarea>
            @if($errors->has('event_question'))
                <div class="alert alert-danger">{{ $errors->first('event_question') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="id_team">Equipo</label>
            <select name="id_team" id="id_team" class="form-control">
                <option value="">Elegí tu Equipo</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id_team }}" {{ $team->id_team == old('id_team') ? 'selected' : '' }}>{{ $team->team }}</option>
                @endforeach
            </select>
            @if($errors->has('id_team'))
                <div class="alert alert-danger">{{ $errors->first('id_team') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="comments">Comentarios/Sugerencias</label>
            <textarea id="comments" name="comments" class="form-control">{{ old('comments') }}</textarea>
            @if($errors->has('comments'))
                <div class="alert alert-danger">{{ $errors->first('comments') }}</div>
            @endif
        </div>

        <button class="btn btn-primary btn-block">Registrarse</button>
    </form>
@endsection