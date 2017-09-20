<?php

namespace App\Http\Controllers;

use App\MultiChart;
use App\SingleChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function firstPage()
    {
        $single_name = SingleChart::get()->pluck('name')->first();
        $single_percent = SingleChart::get()->pluck('percent')->first();
        $single_color = SingleChart::get()->pluck('color')->first();
        $single_icon = SingleChart::get()->pluck('icon')->first();

        $single = \DB::table('singlecharts')->where('user_id','=',Auth::user()->getAuthIdentifier()) ->orderBy('id', 'desc')->first();

        $lastnum = \DB::table('multicharts') ->orderBy('id', 'desc')->first()->data_id;

        $model = MultiChart::where([['data_id','=',$lastnum],['user_id','=',Auth::user()->getAuthIdentifier()]])->get();

        return view('welcome',compact('single','single_name','single_percent','single_color','single_icon','model'));
    }

    public function createChart()
    {
        return view('createchart');
    }
}
