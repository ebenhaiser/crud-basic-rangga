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

    public function createMenu(Request $request)
    {
        $newMenu = new Menu();
        $newMenu->name = $request->name;
        $newMenu->price = $request->price;
        $newMenu->is_available = $request->is_available;
        $newMenu->category_id = $request->category_id;
        $newMenu->description = $request->description;
        $newMenu->save();

        return redirect()->route('index');
    }

    public function editMenu($id)
    {
        $menu = Menu::find($id);
        $categories = Category::get();
        return view('addMenu', compact('categories', 'menu'));
    }
}
