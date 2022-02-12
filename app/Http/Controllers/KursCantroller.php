<?php

namespace App\Http\Controllers;

use App\Models\Kurslar;
use Illuminate\Http\Request;
use App\Http\Requests\Kursrequest as kurs;

class KursCantroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kurs = Kurslar::paginate();
      return view('kurslar.index' ,
    compact('kurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurslar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(kurs $request)
    {

      //  dd($request);
          $store = Kurslar::create($request->input());

          if($store){
              return redirect()->route('kurs.index');
          }
          return redirect()->back();
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
        $edit = Kurslar::find($id);
        return view('kurslar.edit' , compact('edit'));
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
      //  dd($request);

      $update = Kurslar::find($id);
      $updat = $update->update($request->input());

      if($updat){
          return redirect()->route('kurs.index');
      }
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete = Kurslar::find($id);
       $delete->delete($id);
       
           return redirect()->route('kurs.index');
   
    }
}
