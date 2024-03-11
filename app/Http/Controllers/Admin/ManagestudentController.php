<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ManagestudentController extends controller
{ 
    public function show()
    {
        return view('manage-student');
    }
    public function store(Request $request)
    {
        
    }
}