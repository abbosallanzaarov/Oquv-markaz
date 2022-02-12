<?php

namespace App\Http\Controllers;

use App\Models\Mentorlar;
use Illuminate\Http\Request;

class MentCantroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentor = Mentorlar::all();
       return view('ment.index', compact('mentor') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('ment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          

        $foto = $request->file('image');
        $app = $foto->getClientOriginalName();
        $tmp = $foto->getClientOriginalExtension();
        $foto_name = rand(222,333). time().".$tmp";
       $result = $foto->move(public_path("foto/ustoz"), $foto_name);
        $fullfoto = "/foto/ustoz/".$foto_name;



        $food = Mentorlar::create([
            'name'=>$request->name,
            'familya'=>$request->familya,
            'des'=>$request->des,
            'email'=>$request->email,
            'nomer'=>$request->nomer,
            'image'=>$request->$fullfoto,
            'manzil'=>$request->manzil
        ]
         
    );
    
     
        
     if($food){
         return redirect()->route('mentor.index');
    }
        return redirect()->back();
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */

    public function show($id )
    {
      
        $ment = Mentorlar::find($id);
        return view('ment.show', compact('ment'));
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
        //
    }
    
}
