<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = DB::table("categories")->get();
        return view('category.categories',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // DB::table('categories')->insert(
        //     ['name'=>'Drinks' , 'created_at'=>now() ]
        // );
        // dd(now()->)
        return view('category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->name);
        $newTypeValue  = DB::table("categories")->count();
        DB::table('categories')->insert(
            ['name'=>$request->name , 'details'=>$request->detail , 'created_at' =>now()->subMonth(),
            'cat_id' => $newTypeValue +1]
        );
        return redirect()->route('categories.index',['status'=>'OK']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cat_id , Request $request)
    {
        // All items contained in this category.
        // $collection = DB::table('categories')->join('resturant_items', 'categories.cat_id' , '=', 'resturant_items.category_id')->get();
        $collection = DB::table("resturant_items")->where('category_id', $cat_id)->get();
        // dd($collection);
        return view('resturant_items.items',compact('collection'),['category'=>$request->query('category_name')]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $item =  DB::table('categories')->where('id',$id)->first();
       return view("category.editCategory", compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table("categories")->where('id',$id)->update(['name'=>$request->name , 'details'=>$request->detail,'updated_at' =>now()->subMonth()]);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $numOfAffectedRows= DB::table('categories')->where('id','=',$id)->delete();
        return redirect()->route('categories.index',compact('numOfAffectedRows'));
    }
}
