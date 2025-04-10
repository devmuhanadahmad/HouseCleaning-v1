<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplyForJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('website.applyForJob');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.applyForJobForm');
    }

   
}
