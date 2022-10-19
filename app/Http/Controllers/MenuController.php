<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Menu;

class MenuController extends Controller
{
      public function index()
      {
          $menus = Menu::all();

          return view('menus.index', ['menus'=> $menus]);
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
    public function update(MenuRequest $request, Menu $menu)
    {
      $data = $request->validated();
      // $data['is_active'] = ($data['is_active' ?? ''] == 'on';
      $menu->update($data);
      return redirect()->route('menu.show', $menu->id);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }


    public function show(Menu $menu)
     {
         $addableProducts = Product::where('establishment_id',
                            $menu->establishment_id)
                            ->get();
         return view('menus.show', ['menu'=>$menu, 'addableProducts', $addableProducts]);
     }

     public function edit(Menu $menu)
     {
         return view('menus.edit', ['menu'=> $menu]);
     }
}
