<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ManageCategoryController extends Controller
{
    function delete($id){
    	 Category::find($id)->delete();
    return redirect()->route('admin.user.index'); 
    }
    function edit($id){
    	 $categories =  Category::find($id);
    	return view("admin.user.edit",["categories"=>$categories]);
    }
    function update($id, Request $request){
    	$categories = Category::find($id);
        $name = $request->name;

        $categories->name =$name;
        $categories->save();
      return redirect()->route('admin.user.index'); 
    }
    function create(){
        return view("admin.user.createCate");
    }
    function store(Request $request){
        $categories = new Category;
        $name = $request->name;
        $categories->name=$name;
        $categories->save();

    return redirect()->route('admin.user.index'); 
    }
}
