<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $menus = Menu::get();
        return view('index', compact('menus'));
    }
    // public function index2()
    // {
    //     return view('index2');
    // }
}