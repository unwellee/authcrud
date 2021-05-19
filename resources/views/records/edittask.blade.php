@extends('layouts.app')

@section('content')
<form method="POST" action="/index/{{ $task->id }}/task">
    @method('PUT')
    @csrf
        <div class="pt-5">
            <div class="container w-50 pt-1 bg-light bg-gradient text-secondary">
                <h1 class="pt-5">Task Form</h1> 
                
                    <div class="row pt-5">
                        <div class="col">
                            <div class="form-group">
                                <label for="employee">Select Employee:</label>
                                <select class="form-control" id="employee" name="employee">
                                <option selected="selected">{{ $task->employee }}</option>
                                @foreach($record as $rcrd)
                                    <option name="employee" value ="{{ $rcrd->lastname}} {{ $rcrd->firstname }}">{{ $rcrd->lastname}} {{ $rcrd->firstname }}</option>
                                @endforeach                   
                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <label>Deadline</label>
                        <input type="date" class="form-control" name="deadline" placeholder=""  value="{{ $task->deadline}}" required>
                        </div>
                    </div>
                    <div class="pt-3">
                        <label>Task</label>
                        <input type="text" class="form-control" name="task" value="{{ $task->task}}" required>
                    </div>
                    <br><br>
                    
                        <a href="/home" type="submit" name="addemp" class="btn btn-secondary">Cancel</a>   
                        <button type="submit" name="addtask" class="btn btn-primary">Update Task</button>                        
                   
            </div>
        </div>
    </form>
    @endsection