<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = Train::where('orario_di_partenza', '>=', now())->get();
        return view('home', compact('trains'));
    }
}

//'2023-05-15 00:00:00'
