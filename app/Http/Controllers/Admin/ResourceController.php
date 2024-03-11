<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResourceController extends controller
{
    public function show()
    {
        return view('resource');
    }
}