<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sets = HomeModel::orderBy('id', 'desc')->paginate();
        return view('home.index', compact('sets'));
    }
}
