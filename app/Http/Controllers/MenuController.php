<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
    $menus = Menu::all();
    return view('menus.index',
    ['menus' => $menus]);
    }
    public function create()
    {
      return view('menus.create');
    }
    public function store(Request $request)
    {
      $data = $request->all();

      Menu::create([
        'name' => $data['name'],
        'establishment_id' => \Auth::user()->establishment_id,
        'description' => $data['description'],
        'is_available' => $data['is_available']
      ]);
    }
}
