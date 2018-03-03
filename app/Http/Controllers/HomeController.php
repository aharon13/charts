<?php

namespace App\Http\Controllers;

use App\MultiChart;
use App\SingleChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function firstPage()
    // {
    //     $single_name = SingleChart::get()->pluck('name')->first();
    //     $single_percent = SingleChart::get()->pluck('percent')->first();
    //     $single_color = SingleChart::get()->pluck('color')->first();
    //     $single_icon = SingleChart::get()->pluck('icon')->first();

    //     $single_all = \DB::table('singlecharts')->where('user_id','=',Auth::user()->getAuthIdentifier()) ->orderBy('id', 'desc')->get();

    //     $model_all =MultiChart::where('user_id',Auth::id())->get()->groupBy('data_id')->toArray();
        
    //     return view('welcome',compact('single_all','single_name','single_percent','single_color','single_icon','model_all'));
    // }

    // public function createChart()
    // {
    //     return view('createchart');
    // }
}
