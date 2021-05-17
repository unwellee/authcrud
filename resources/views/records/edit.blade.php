<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="/index/{{ $record->id }}">
    @method('PUT')
    @csrf
        <div class="pt-5">
            <div class="container w-50 pt-1 bg-light bg-gradient text-secondary">
                <h1 class="pt-5">Employee Form</h1> 
                
                    <div class="row pt-5">
                        <div class="col">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name"  value="{{ $record->lastname }}" required>
                        </div>
                        <div class="col">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First name"  value="{{ $record->firstname }}" required>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address"  value="{{ $record->email }}" required>
                        </div>
                        <div class="col">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dateofbirth" placeholder=""  value="{{ $record->dateofbirth }}" required>
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address"  value="{{ $record->address }}" required>
                    </div>

                    <div class="row">
                        
                        <div class="col">
                        <label>Password Verification</label>
                        <input type="password" class="form-control" name="password" placeholder="Password"  value="" required>
                        </div>
                        
                        <div class="col">
                        <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required {{ ($record->gender=="Male")? "checked" : "" }}>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required {{ ($record->gender=="Female")? "checked" : "" }}>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other" required {{ ($record->gender=="Other")? "checked" : "" }}>
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>
                    </div>
                    <br><br>
                        <a href="/home" type="submit" name="addemp" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>                        
                
            </div>
        </div>
    </form>
</body>
</html>