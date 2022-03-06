<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ApiController extends Controller
{
    //
    function my(){
        return Contact::all();
    }
}
