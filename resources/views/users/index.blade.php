@extends('layouts.main')

@section('title',
'Carreraa')

@section('main')
    <img src="{{ url('/imgs/edificio.jpg') }}" alt="San Antonio de Giles">
    <h1>Inscriptos a la carrera</h1>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>

            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Domicilio</th>
            <th>DNI/Pasaporte</th>
            <th>Nacionalidad</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Cómo se enteró del evento</th>
            <th>Equipo</th>
            <th>Comentarios</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>

                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y')}}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->dni }}</td>
                <td>{{ $user->nationality }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->event_question }}</td>
                <td>{{ $user->team->team }}</td>
                <td>{{ $user->comments }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection