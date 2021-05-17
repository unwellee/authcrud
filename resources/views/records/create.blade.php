@extends('layouts.app')

@section('content')
<form method="POST" action="/index">
    @csrf
        <div class="pt-5">
            <div class="container w-50 pt-1 bg-light bg-gradient text-secondary">
                <h1 class="pt-5">Employee Form</h1> 
                
                    <div class="row pt-5">
                        <div class="col">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name"  value="" required>
                        </div>
                        <div class="col">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First name"  value="" required>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address"  value="" required>
                        </div>
                        <div class="col">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password"  value="" required>
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address"  value="" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dateofbirth" placeholder=""  value="" required>
                        </div>
                        
                        <div class="col">
                        <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other" required>
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>
                    </div>
                    <br><br>
                        <a href="/home" type="submit" name="addemp" class="btn btn-secondary">Cancel</a>   
                        <button type="submit" name="addemp" class="btn btn-primary">Add Employee</button>                        
                
            </div>
        </div>
    </form>
    @endsection