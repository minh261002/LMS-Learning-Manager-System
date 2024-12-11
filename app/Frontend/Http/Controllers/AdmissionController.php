<?php

namespace App\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('frontend.admission.index');
    }
}
