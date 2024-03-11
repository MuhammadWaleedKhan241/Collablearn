<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeacherSessionController extends Controller
{
    public function show()
    {
        return view('tmanage-session');
    }

}