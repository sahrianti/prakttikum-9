<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() 
    {
        return view('skill');
    }

    public function hasilskill(Request $request) 
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);

        return view('hasilskill', ['data' => $request]);
    }
}