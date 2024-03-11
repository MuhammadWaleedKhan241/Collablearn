<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AddSessionController extends controller
{
     public function show()
    {
        return view('add-session');
    }
}