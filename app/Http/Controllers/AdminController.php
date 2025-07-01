<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AdminController extends Controller
{
    public function index()
    {
        $menus = Menu::get();
        return view('index', compact('menus'));
    }

    public function deleteMenu($id) //
    {
        $deleteMenu = Menu::where('id', $id);
        $deleteMenu->delete();
        return redirect()->route('index');
    }

    public function addMenu()
    {
        $categories = Category::get();
        return view('addMenu', compact('categories'));
        // return view('addMenu');
    }

    // public function index2()
    // {
    //     return view('index2');
    // }
}
