<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EzebedController extends Controller
{
    function index(){
        return Inertia::render('EzebedLandingPage');
    }
        
}
