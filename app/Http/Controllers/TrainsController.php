<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trainss = train::all();

        return view('train_page', compact('trainss'));
    }
}
