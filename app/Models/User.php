<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id_user';

    protected $fillable = ['id_team', 'name', 'last_name', 'birthday', 'address', 'dni', 'nationality', 'email', 'phone', 'comments', 'event_question'];

    public static $rules = [
        'id_team' => 'required|integer|exists:teams',
        'name' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
        'last_name' => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
        'birthday' => 'required',
        'address' => 'required|min:10|max:100|regex:/^[a-zA-Z0-9\s]+$/',
        'dni' => 'required|numeric|digits_between:7,10|unique:users',
        'nationality' => 'required|min:4',
        'email' => 'required|email|max:50|unique:users',
        'phone' => 'required|numeric|digits_between:8,20',
        'comments' => 'required|min:5|max:200|regex:/^[a-zA-Z0-9\s]+$/',
        'event_question' => 'required|min:5|max:200|regex:/^[a-zA-Z0-9\s]+$/'
    ];

    public static $errorMessages = [
        'id_team.required' => 'Elegir un equipo.',
        'id_team.integer' => 'El equipo debe ser un id.',
        'id_team.exists' => 'El equipo seleccionado no existe.',
        'name.required' => 'Completar nombre.',
        'name.min' => 'Tu nombre debe tener al menos :min caracteres.',
        'name.max' => 'Tu nombre debe tener como máximo :max caracteres.',
        'name.regex' => 'Tu nombre debe contener sólo letras o espacios.',
        'last_name.required' => 'Completar apellido.',
        'last_name.min' => 'Tu apellido debe tener al menos :min caracteres.',
        'last_name.max' => 'Tu apellido debe tener como máximo :max caracteres.',
        'last_name.regex' => 'Tu apellido debe contener sólo letras o espacios.',
        'birthday.required' => 'Completar fecha de nacimiento.',
        'address.required' => 'Completar domicilio.',
        'address.min' => 'Tu domicilio debe tener al menos :min caracteres.',
        'address.max' => 'Tu domicilio debe tener como máximo :max caracteres.',
        'address.regex' => 'Tu domicilio debe contener sólo letras, números o espacios.',
        'dni.required' => 'Completar DNI.',
        'dni.numeric' => 'Tu DNI debe ser un número.',
        'dni.digits_between' => 'Tu DNI debe tener entre 7 y 10 digitos.',
        'dni.unique' => 'Este DNI/Pasaporte es inválido.',
        'nationality.required' => 'Completar nacionalidad.',
        'nationality.min' => 'Tu nacionalidad debe tener al menos :min caracteres.',
        'email.required' => 'Completar email.',
        'email.email' => 'Tu email no es válido.',
        'email.unique' => 'Tu email no es válido.',
        'email.max' => 'Tu email debe tener como máximo :max caracteres.',
        'phone.required' => 'Completar teléfono.',
        'phone.numeric' => 'Tu teléfono debe ser un número.',
        'phone.digits_between' => 'Tu teléfono debe tener entre 8 y 12 digitos.',
        'comments.required' => 'Tu comentario no puede estar vacío.',
        'comments.min' => 'Tu comentario debe tener al menos :min caracteres.',
        'comments.max' => 'Tu comentario debe como máximo :max caracteres.',
        'comments.regex' => 'Tu comentario debe contener sólo letras, números o espacios.',
        'event_question.required' => 'Tu respuesta no puede estar vacía.',
        'event_question.min' => 'Tu respuesta debe tener al menos :min caracteres.',
        'event_question.max' => 'Tu respuesta debe como máximo :max caracteres.',
        'event_question.regex' => 'Tu respuesta debe contener sólo letras, números o espacios.'
    ];
    public function team()
    {
        return $this->belongsTo(Team::class, 'id_team', 'id_team');
    } 
}
