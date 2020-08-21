<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Product;
use App\Detail;
use App\Category;

class ManageUserController extends Controller
{
    function index(){
        $users = DB::table('users')->get();
        $products = Product::all();
        $categories = Category::all();

        return view("admin.user.index",["users"=>$users,"products"=>$products,"categories"=>$categories]);
    }

    function delete($id){

        Product::where('user_id',$id)->delete();
        User::find($id)->delete();
      //  DB:: table('products')->where('id','=',$id)->delete();
        return redirect()->route('admin.user.index'); 
    }
     function create(){
        return view("admin.user.create");
    }
    function store(Request $request){
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $phoneNumber = $request->phoneNumber;
        $money = 0;
        $role = 'user';

        $request->validate([
            'username'=>'required|unique:users|max:50',
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'min:6',
        ]);

        $hashPassword = Hash::make($password);
        DB::table('users')->insert(["username"=>$username,"name"=>$name,"email"=>$email,"role"=>$role,"password"=>$hashPassword,"phoneNumber"=>$phoneNumber,"address"=>$address,"money"=>$money]);


     return redirect()->route('admin.user.index'); 
    }

     function edit($id){
        $users = DB::table("users")->find($id);
        return view("admin.user.edit",['user'=>$users]);
    }

   
}



