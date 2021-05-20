@extends('layouts.app')

@section('content')
<!-- employee list -->
<div class="pt-5">
    <div class="container p-5 mb-2 bg-light bg-gradient text-secondary">
        <div class="row">
            <div class="col">
            <h1>Employee</h1>
            </div>
            <div class="col col-lg-2">
                    @role('admin')
                        <a href="/index/create" type="submit" class="btn btn-primary btn-sm">Add Employee</a>
                    @endrole
            </div>
        </div>
        <table class="table table-borderless justify-content-center">
            <thead class="table table-default font-size-20">
                <tr>
                    <th>Employee Id</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    
                        <th>Edit</th>
                    @role('admin')
                        <th>Delete</th>
                    @endrole
                    
                </tr>
            </thead>
                    @foreach($record as $rcrd)
                    <tr>
                        <th scope="row"><?php echo "EMP"; ?>{{ $newDate = date("dmY", strtotime($rcrd->created_at)) }}{{  $newid = str_pad($rcrd->id ,4,"0",STR_PAD_LEFT) }}</th>
                        <td>{{ $rcrd-> lastname }}</td>
                        <td>{{ $rcrd-> firstname }}</td>
                        <td>{{ $rcrd-> email }}</td>
                        <td>{{ $rcrd-> address }}</td>
                        <td>{{ $rcrd-> dateofbirth }}</td>
                        <td>{{ $rcrd-> gender }}</td>
                        
                        @role('employee')
                        <?php //$authid = auth()->id(); ?>
                        <td><a href="/index/{{ $rcrd->id }}/edit" class="btn btn-info btn-sm">Edit</a> 
                        @endrole
                        @role('admin')
                        <td><a href="/index/{{ $rcrd->id }}/edit" class="btn btn-info btn-sm">Edit</a> 

                        
                        </td>
                        <td><form action="/index/{{ $rcrd->id }}" method=POST>
                        @method('DELETE')
                        @csrf 
                        <button class="btn btn-danger btn-sm">Delete</button>
                        
                        @endrole</td>
                        </form>
                        
                    </tr>
                    @endforeach
        </table>
    </div>
    </div>
    
    
    <!-- task list -->
    <div class="pt-5">
    @role('admin')
    <div class="container p-5 mb-2 bg-light bg-gradient text-secondary">
        <div class="row">
            <div class="col">
            <h1>Task</h1>
            </div>
            <div class="col col-lg-2">
                    
                        <a href="/index/createtask" type="submit" class="btn btn-primary btn-sm">Add Task</a>
                    
            </div>
        </div>
        <table class="table table-borderless justify-content-center">
            <thead class="table table-default font-size-20">
                <tr>
                    <th>Employee</th>
                    <th>Task</th>
                    <th>Deadline</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
                    @foreach($task as $task)
                    <tr>
                        <td>{{ $task->userTask->lastname }} {{ $task->userTask->firstname }}</td>
                        <td>{{ $task->task }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td><a href="/index/{{ $task->id }}/edittask" class="btn btn-info btn-sm">Edit</a> </td>
                        <td><form action="/index/{{ $task->id }}/task" method=POST>
                        @method('DELETE')
                        @csrf 
                        <button class="btn btn-danger btn-sm">Delete</button>
                        
                        </td>
                        </form>
                        
                    </tr>
                        
                    @endforeach
        </table>
    </div>
    @endrole
    </div>
    
@endsection