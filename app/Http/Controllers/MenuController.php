<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return response()->json($menus);
    }

    public function show($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        return response()->json($menu);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            // Add validation rules for other fields
        ]);

        $menu = Menu::create($request->all());

        return response()->json($menu, 201);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $request->validate([
            'title' => 'required',
            'url' => 'required',
            // Add validation rules for other fields
        ]);

        $menu->update($request->all());

        return response()->json($menu);
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $menu->delete();

        return response()->json(['message' => 'Menu deleted']);
    }
}
