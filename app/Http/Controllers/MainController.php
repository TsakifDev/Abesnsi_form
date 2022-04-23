<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib disi',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!',
        ];

        $this->validate($request,[
           'nama' => 'required|min:3|max:30',
           'gender' => 'required',
           'kelas' => 'required'
        ],$messages);
 
        return view('proses',['data' => $request]);
    }
}
