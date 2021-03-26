<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropZoneController extends Controller
{
    public function dropzone(){
        return view ('dropzone');
    }
}
