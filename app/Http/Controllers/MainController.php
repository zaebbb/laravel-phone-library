<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phoneBookMigrate;
class MainController extends Controller
{
    // public function home(){
    //     return view('main');
    // }
    public function home(){
        // $users = phoneBookMigrate::all();
        $users = phoneBookMigrate::orderBy('name','desc')->paginate(10);
        // $users = phoneBookMigrate::orderBy('name','desc')->get();
        return view('main', compact('users'));
    }

    public function search(Request $request){
        $search =$request->search;

        $search = phoneBookMigrate::where('name', 'LIKE', "%{$search}%")->orderBy('name','desc')->paginate(10);
        $users = $search;
        return view('main', compact('users'));
    }
}
