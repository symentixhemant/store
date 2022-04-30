<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class store_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $p=new product;
        $p->Pname=$request->get('p_name');
        $p->Pcode=$request->get('p_code');
        $p->Pprice=$request->get('p_price');
        $p->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id=request('id');
        $p=product::find($id);
        
            return view('result',compact('p'));
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $id=request('id');
        $p=product::find($id);
        return view('update_result',compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // $p=product::find($request->get('$p->id'));
        // $p->Pname=$request->get('p_name');
        // $p->Pcode=$request->get('p_code');
        // $p->Pprice=$request->get('p_price');
        // $p->save();
        // return redirect("/");
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
