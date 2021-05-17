<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RecordsController extends Controller
{ 
    public function create()
    {
        return view('records.create');
    }

    public function store()
    {

        $user = User::create([
            'lastname' => request('lastname'),

            'firstname' => request('firstname'),

            'email' => request('email'),

            'password' => Hash::make(request('password')),

            'address' => request('address'),

            'dateofbirth' => request('dateofbirth'),

            'gender' => request('gender'),

        ]);

        $user->assignRole('employee');

        return redirect('/home');
    }

    public function edit(User $record)
    {
        return view('records.edit', ['record' => $record]);
    }

    public function update(User $record)
    {
        

        $record->update([

            'lastname' => request('lastname'),

            'firstname' => request('firstname'),

            'email' => request('email'),

            'password' => Hash::make(request('password')),

            'address' => request('address'),

            'dateofbirth' => request('dateofbirth'),
            
            'gender' => request('gender'),

        ]);

        return redirect('/home');
    }

    // public function destroy(User $record)
    // {
    //     $record->delete();

    //     return redirect('/home');
    // }
    public function destroy($record)

    {

        User::find($record)->delete();

        return redirect('/home');
    }
}
