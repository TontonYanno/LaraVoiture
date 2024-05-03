<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerRegister extends Controller
{
    public function ownerprofile(){
        return view('users.profile');
    }
}
