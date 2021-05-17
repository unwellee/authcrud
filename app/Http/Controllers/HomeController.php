<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // print_r(auth()->user());
        // $Role1 = Role::findById(2);
        // $permission2 = Permission::findById(2);
        // $permission3 = Permission::findById(3);
        // auth()->user()->assignRole($Role1);

        // @role('admin')
        
        // @else
        // $record = User::auth()->user();
        // @endrole


        if(auth()->user()->hasRole('admin')){
            // $record = User::All();
            $record = User::All()->except(Auth::id(1));
        }else{
            $id = Auth::id();
            $record = User::where('id', $id)->get();
        }

        return view('records.index', ['record' => $record]);
    }
    
    

}
