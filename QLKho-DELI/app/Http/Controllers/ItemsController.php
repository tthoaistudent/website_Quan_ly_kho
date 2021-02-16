<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ItemsController extends Controller
{
    public function index(){
        $show_items = DB::table('items_tb')->get();
        $manager_items = view('pages.items')->with('show_items',$show_items);
        return view('welcome')->with('pages.items',$manager_items);
    }
}
