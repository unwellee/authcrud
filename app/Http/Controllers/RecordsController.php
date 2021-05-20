<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        // if(isset(auth()->user()){
        if(auth()->user()->hasRole('admin')){
            return view('records.edit', ['record' => $record]);
            }else if($record->id === Auth::id()){
                return view('records.edit', ['record' => $record]);
            }else{
                abort(403, 'Unauthorized action.');
            }
        // }else {
        //     abort(403, 'Unauthorized action.');
        // }  
    }

    public function update(User $record)
    {
        // $id = Auth::id();
        // if($record->id === $id){
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

    public function destroy(User $record)
    {
        $record->delete();

        return redirect('/home');
    }

    public function createtask(User $record)
    {
        $record = User::All()->except(Auth::id());
        return view('records.createtask', ['record' => $record]);
    }
    
    public function storetask()
    {

        Task::create([

            'employee_id' => request('employee'),

            'task' => request('task'),

            'deadline' => request('deadline'),

        ]);

        return redirect('/home');
    }

    public function edittask(Task $task)
    {
        $record = User::All()->except(Auth::id());
        return view('records.edittask',['record' => $record], ['task' => $task]);
    }

    public function updatetask(Task $task)
    {
    
        $task->update([

            'employee_id' => request('employee'),

            'task' => request('task'),

            'deadline' => request('deadline'),
      
        ]);

    

        return redirect('/home');
    }

    public function destroytask(Task $task)
    {
        $task->delete();

        return redirect('/home');
    }

}
