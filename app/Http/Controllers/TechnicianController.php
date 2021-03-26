<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function AllTechnicians(){
        return view('technician.index');
    }
}
