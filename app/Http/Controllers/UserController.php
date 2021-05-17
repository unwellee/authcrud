<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    $record = User::All();
    return view('records.index', ['record' => $record]);
}
