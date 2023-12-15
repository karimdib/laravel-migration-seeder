<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trainss = train::where('in_orario', '1')->get();

        return view('train_page', compact('trainss'));
    }
}
