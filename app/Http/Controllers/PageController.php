<?php

namespace App\Http\Controllers;
use App\Model\Prova;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        dd(Prova::all());
        return view('home',);
    }
}
