<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trainss = train::where('giorno_transito', 'CURRENT_TIMESTAMP')->get();

        return view('train_page', compact('trainss'));
    }
}
