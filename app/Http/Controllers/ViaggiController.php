<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio;

class ViaggiController extends Controller
{
    public function index(){
        $viaggi = Viaggio::all();
        dump($viaggi);
        return view('viaggi');
    }
}
