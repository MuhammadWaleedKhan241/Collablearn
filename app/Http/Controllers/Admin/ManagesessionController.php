<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ManagesessionController extends controller
{
    public function show()
    {
        return view('manage-session');
    }
}