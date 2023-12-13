<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trainss = train::where('giorno_transito', '2023-12-13')->get();

        return view('train_page', compact('trainss'));
    }
}
