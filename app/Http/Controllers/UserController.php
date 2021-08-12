<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller
{



    public function __construct()
    {
       // $this->middleware(['auth','verified']);
    }


    /**
     *
     *
     * Dashboard for user
     *
     *
     *
     */
    public function dashboard(Request $request)
    {
        return view("home");

    }





}
