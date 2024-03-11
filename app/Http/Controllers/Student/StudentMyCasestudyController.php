<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentMycasestudyController extends Controller
{
    public function __invoke()
    {
        // dd('ok');
    return view('s-case-studies');
    }
}