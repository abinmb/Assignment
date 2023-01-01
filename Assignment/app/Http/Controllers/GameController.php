<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=game::all();         
        return view("index",["datas"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game=new game;
        $user = game::where('bagmoid', '=', request("bagmoid"))->first();
        if ($user === null) {
            $game->bagmoid=request("bagmoid");
        }
        else{
            $game->bagmoid=" ";
        }
        $game->name=request("name");
        $game->age=request("age");
        $game->country=request("country");
        $game->save();         
        return redirect("/");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ids=game::find($id);         
        return view("show",["ide"=>$ids]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ids=game::find($id);          
        return view("edit",["ide"=>$ids]);
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
        $game=game::find($id);         
        $game->bagmoid=request("bagmoid");         
        $game->name=request("name");         
        $game->age=request("age");         
        $game->country=request("country");           
        $game->save();              
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids=game::find($id);            
        $ids->delete();            
        return redirect("/");
    }
    public function display()
    {
        $user = game::where('bagmoid', '=','bg3' )->first();
        if ($user === null) {
            echo "no";
         }
         else{
            echo "yes";
         }
        //  Input::get('email')
    }
}
