<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        // $menus = Menu::all();

        if (is_null($menus->first())) {

            return response()->json([
                'status' => 'failed',
                'message' => 'No menu item'
            ], 200);
        }
        $response = [
            'status' => 'failed',
            'message' => 'No menu item',
            'data' => $menus
        ];


        return response()->json($response, 200);
    }

    public function show($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {

            return response()->json([
                'status' => 'failed',
                'message' => 'No Menu'

            ], 404);
        }
        $response = [
            'status' => "success",
            'message' => 'Menu items',
            'data' => $menu

        ];
        return response()->json($response, 200);


    }

    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|max:250|unique:menus,title',
                'url' => 'required',
                // Add validation rules for other fields
            ]
        );

        if ($validate->fails()) {

            return response()->json([
                'status' => 'failed',
                'message' => 'Validation error',
                'data' => $validate->errors()
            ]);
        }

        $menu = Menu::create($request->all());

        $response = [

            'status' => 'Success',
            'message' => 'Created new menu item',
            'data' => $menu
        ];

        return response()->json($response, 200);
    }

    public function update(Request $request, $id)
    {



        $validate = Validator::make($request->all(), [
            'title' => 'required|string|max:250',
            'url' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation errors',
                'data' => $validate->errors()

            ], 403);
        }

        $menu = Menu::find($id);
        if (is_null($menu)) {

            return response()->json([
                'status' => 'failed',
                'message' => 'No Menu'

            ], 404);
        }
        $menu->update($request->all());


        $response = [
            'status' => 'success',
            'message' => 'Updated Menu',
            'data' => $menu

        ];

        return response()->json($response, 200);
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (is_null($menu)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No Menu'

            ], 404);
        }

        $menu->delete();

        $response = [
            'status' => 'success',
            'message' => 'Deleted menu item successfully',

        ];
        return response()->json($response, 200);
    }

    //search menu item
    public function search($name)
    {

        $menus = Menu::where('title', 'like', '%' . $name . '%')
            ->latest()->get();

        if (is_null($menus->first())) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No menu found!',
            ], 404);
        }

        $response = [
            'status' => 'success',
            'message' => 'Menu are retrieved successfully.',
            'data' => $menus,
        ];

        return response()->json($response, 200);


    }
}

