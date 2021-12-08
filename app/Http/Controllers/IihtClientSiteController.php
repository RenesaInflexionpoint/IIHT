<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IihtController extends Controller
{
    public function index(){
        return view('iihtClientSite.index');
    }
}
