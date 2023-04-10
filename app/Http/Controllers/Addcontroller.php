<?php

namespace App\Http\Controllers;

use App\Models\Sheet_Products;
use Illuminate\Http\Request;

class Addcontroller extends Controller
{
    public function index()
    {
        $sheets = Sheet_Products::all();
        return view('sheets', compact('sheets'));
    }
    public function list()
    {
        $sheets = Sheet_Products::all();
        return view('sheets', compact('sheets'));
    }
}