<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
class CategoryController extends Controller
{
    public function index(){
        $show_category = DB::table('category_tb')->get();
        $manager_category =  view('pages.categoryManager')->with('show_category',$show_category);
        return view('welcome')->with('pages.categoryManager',$manager_category);
    }

    public function add_Category(Request $request){
        $data = array();
        $data['category_name'] = $request->category_name;
        print_r($data);
        DB::table('category_tb')->insert($data);
        return Redirect::to('/category');
    }


    public function delete_Category($id){
        DB::table('category_tb')->where('category_id',$id)->delete();
        return Redirect::to('/category');
    }

    public function update_Category($id){
        $update_category = DB::table('category_tb')->where('category_id',$id)->get();
        $manager_category = view('pages.update_category')->with('update_category',$update_category);
        return view('welcome')->with('pages.update_category',$manager_category);
    }

    public function update_category_value(Request $request,$category_id){
        $data = array();
        $data['category_name'] = $request->category_name;
        DB::table('category_tb')->where('category_id',$category_id)->update($data);
        return Redirect::to('/category');
    }

}
