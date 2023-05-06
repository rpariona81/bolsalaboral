<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = 'Bolsa Laboral';
        $data['appname'] = 'Bolsa Laboral';
        return view('app.index', $data);
    }

    public function about()
    {
        $data = [];
        $data['title'] = 'Bolsa Laboral';
        $data['appname'] = 'Bolsa Laboral';
        return view('app.datatable', $data);
    }
}
