<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //session()->push('user.teams', 'developers');

        
        $data = $request->session()->all();

        dump($data);
        //$data = DB::table('sessions')->get();
        //print_r(unserialize(base64_decode($data))); 
        //$sessions = DB::table('sessions')->whereNotNull('user_id')->cursor();
        //$obj = collect(unserialize(base64_decode(session()->get('payload'))));

        //$value = $request->session()->get('payload');
        return view('home',$data);
        
    }

    public function verUsers()
    {
        $data = User::all();
        return $data;
    }

    public function verRoles()
    {
        $data = Role::all();
        return $data;
    }

    public function verMenus()
    {
        $user_logged = 2;
        $data = Role::where('id', $user_logged)->first();
        //$data = Role::all();
        return $data;
    }
}
