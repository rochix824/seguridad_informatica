<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index ()
    {
        $users = User::with(['team'])->get();
        return view ('users.index', compact('users'));
    }

    public function add()
    {
        $teams = Team::all();

        return view('users.join', compact('teams'));
    }

    public function create (Request $request)
    {
        $request->validate(User::$rules, User::$errorMessages);
        $data = $request->all();
        User::create($data);

        return redirect(url('/'))->with('msg', 'Inscripción exitosa');
    }

    public function getTeam($id)
    {
        $team = Team::find($id);

        return response()->json($team);
    }
}
