<?php

namespace App\Http\Controllers;

use App\SingleChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SingleChartController extends Controller
{
    public function index(){
    	return view('create_single_chart');
    }

    public function create(){
        $data = Input::except('_token');
        $validator = \Validator::make($data, [
            'name' => 'required|max:191',
            'percent' => 'required|numeric',
            'color' => 'required|max:191',
            'icon' => 'required',
            'title' => 'required|max:191',
            'description' => 'required|max:191',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        SingleChart::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = SingleChart::where([['user_id','=',Auth::id()],['id','=',$id]]);
        $item->delete();

        return redirect()->back()->with('message','Deleted!');
    }

}
