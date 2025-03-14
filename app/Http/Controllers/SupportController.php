<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class SupportController extends Controller
{
    public function index()
    {
    
        return view("support.index");
    
    }

}
