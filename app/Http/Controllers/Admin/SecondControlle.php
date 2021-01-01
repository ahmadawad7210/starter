<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondControlle extends Controller
{
    //


    /**
     * SecondControlle constructor.
     */
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function showString(){

        return 'static string';
    }
}
