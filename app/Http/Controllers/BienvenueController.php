<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenueController extends Controller
{
    
    public function bienvenue()
    {
        return view('\auth\mylogin');
    }
}
