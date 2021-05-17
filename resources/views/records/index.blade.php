@extends('layouts.app')

@section('content')
<div class="pt-5">
    <div class="container p-5 mb-2 bg-light bg-gradient text-secondary ">
        <div class="row">
            <div class="col">
            <h1>Employees</h1>
            </div>
            <div class="col col-lg-2">
                
                    <a href="/index/create" type="submit" class="btn btn-primary btn-sm">Add Employee</a>
                
            </div>
        </div>
        <table class="table table-borderless justify-content-center">
            <thead class="table table-default font-size-20">
                <tr>
                    <th>Employee Id</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Edit / Delete</th>
                </tr>
            </thead>
                    @foreach($record as $rcrd)
                    <tr>
                        <th scope="row"><?php echo "EMP"; ?>{{ $newDate = date("dmY", strtotime($rcrd->created_at)) }}{{  $newid = str_pad($rcrd->id ,4,"0",STR_PAD_LEFT) }}</th>
                        <td>{{ $rcrd-> lastname }}</td>
                        <td>{{ $rcrd-> firstname }}</td>
                        <td>{{ $rcrd-> address }}</td>
                        <td>{{ $rcrd-> dateofbirth }}</td>
                        <td>{{ $rcrd-> gender }}</td>
                        <form action="/index/{{ $rcrd->id }}" method="POST">
                        <td><a href="/index/{{ $rcrd->id }}/edit" class="btn btn-info btn-sm">Edit</a> 

                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
        </table>
    </div>
    </div>
@endsection