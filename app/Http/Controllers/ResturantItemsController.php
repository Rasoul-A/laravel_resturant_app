<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ResturantItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $parentCategory = 'All')
    {


            $collection = DB::table("resturant_items")->get();
            return view('resturant_items.items', compact('collection'),['category'=>$parentCategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $parentCategory = 'Resturant')
    {
        $allCategories = DB::table('categories')->select('name','cat_id')->get();
        return view('resturant_items.createItem',['category'=>$parentCategory], compact('allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('resturant_items')->insert(
            ['name' => $request-> name ,
            'ingredients' => $request->ingredients,
            'price' => $request->price,
            'count' => $request->count,
            'created_at' =>now()->subMonth(),
            'category_id'=> $request->category_id]
        );
        return redirect()->route('items.index',['status'=> 'OK']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // All orders containing this item
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $parentCategory = 'Resturant')
    {
        $item = DB::table('resturant_items')->where('id',$id)->first();
        return view('resturant_items.editItem', compact('item'), ['category'=> $parentCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Db::table('resturant_items')->where('id',$id)->update(
            ['name' => $request-> name ,
            'ingredients' => $request->ingredients,
            'price' => $request->price,
            'count' => $request->count,
            'updated_at' =>now()->subMonth()]
        );
        return redirect()->route('items.index', ['status'=> 'item updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $numOAffectedRows = DB::table('resturant_items')->where('id',$id)->delete();
        return redirect()->route('items.index',['numOfAffectedRows' => $numOAffectedRows]);
    }
}
