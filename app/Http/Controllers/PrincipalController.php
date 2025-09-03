<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function form()
    {
        return view('form');
    }
    public function enviarForm(Request $request)
    {
        dd($request->post());
    }
}