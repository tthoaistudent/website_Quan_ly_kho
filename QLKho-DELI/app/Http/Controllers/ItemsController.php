<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Collection;
use Carbon\Carbon;
session_start();
class ItemsController extends Controller
{
    public function index(){
        $show_items = DB::table('items_tb')
        ->join('category_tb','category_tb.category_id','=','items_tb.item_category')
        ->orderby('items_tb.item_id','desc')
        ->get();
        $manager_items = view('pages.items')->with('show_items',$show_items);
        return view('welcome')->with('pages.items',$manager_items);
    }

    public function add_item(){
        $category = DB::table('category_tb')->orderby('category_id','desc')->get();
        return view('pages.items.add_item')->with('category',$category);
    }

    public function save_item(Request $request){
        $data = array();

        $date = Carbon::now('Asia/Ho_Chi_Minh');
        $item_date =  $date->toDateString();

        $data['item_name']=$request->item_name;
        $data['item_category'] = $request->item_category;
        $data['item_DVT'] =$request->item_DVT;
        $data['item_date']= $item_date;
        $data['item_soluong'] = $request->item_soluong;
        print_r($data);

        DB::table('items_tb')->insert($data);
        return Redirect::to('/items');
    }

    public function update_item($item_id){
        $category = DB::table('category_tb')->orderby('category_id','desc')->get();
        $update_item = DB::table('items_tb')
        ->where('items_tb.item_id',$item_id)
        ->get();
        $manager_items = view('pages.items.update_item')->with('update_item',$update_item)->with('category',$category);
        return view('welcome')->with('pages.items.update_item',$manager_items);
    }

    public function update_item_value(Request $request, $item_id){
        $data = array();

        $data['item_name']=$request->item_name;
        $data['item_category'] = $request->item_category;
        $data['item_DVT'] =$request->item_DVT;
        $data['item_soluong'] = $request->item_soluong;
        
        DB::table('items_tb')->where('item_id',$item_id)->update($data);

        return Redirect::to('/items');

    }
}
