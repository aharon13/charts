<?php

namespace App\Http\Controllers;

use App\MultiChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class MultiChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create_multi_chart',compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $num = \DB::table('multicharts') ->orderBy('id', 'desc')->first()->id;
        $number = Input::get('number');
        for($i=1;$i<=$number;$i++){
            $data = ['name'=>Input::get('name'.$i),
                    'percent' => Input::get('percent'.$i),
                    'color' => Input::get('color'.$i),
                    'icon' => Input::get('icon'.$i),
                    'data_id' => $num,
                    'title' => Input::get('title'.$i),
                    'description' => Input::get('description'.$i),
                    'user_id' => Auth::user()->getAuthIdentifier()
                ];
            $validator = \Validator::make($data, [
                'name' => 'required|max:191',
                'percent' => 'required|numeric',
                'color' => 'required|max:191',
                'title' => 'required|max:191',
                'icon' => 'required',
                'description' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }

            MultiChart::create($data);
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MultiChart::where([['user_id','=',Auth::id()],['data_id','=',$id]]);
        $item->delete();

        return redirect()->back()->with('message','Deleted!');
    }
}
