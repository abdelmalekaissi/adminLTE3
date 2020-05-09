<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RPI_AuthController extends Controller
{
    //
    public function check(Project $project)
    {
        $validatedData = $request->validate([
            'rpi' => 'required',
            'password' => 'required',
        ]);
        $project->addTask($validatedAttributes);
        return view('bienvenue');

    }
}
