<?php

namespace App\Http\Controllers;
//return type View

use App\Models\Menu;
use Illuminate\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(): View
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //render view with posts
        return view('menu.index', compact('menus'));
    }

    public function menu(): View
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //render view with posts
        return view('home', compact('menus'));
    }
}
