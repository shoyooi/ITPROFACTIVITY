<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    public function create(Request $request)
    {
        $item = Categories::create([
            'name' => $request->name
        ]);

        return $item;
    }

    public function update(Request $request)
    {
        Categories::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        return Categories::find($request->id);
    }

    public function destroy(Request $request)
    {
        Categories::where('id', $request->id)->delete();

        return 'Category is deleted!';
    }

    public function all()
    {
        return Categories::all();
    }
}
