<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {

    public function create() {

        return view('login');
    }

    public function store() {

        if(auth()->attempt(request(['username', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El usuario o password son incorrectos.',
            ]);
        } else {
            return redirect()->to('/rentas');
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
