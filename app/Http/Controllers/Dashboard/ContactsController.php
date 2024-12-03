<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts =contact::all();
        return view('dashboard.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           
            'first'=>'required',
            'second'=>'required',
            'messages'=>'required',
            'description'=>'required',
            'email'=>'required',
        ]);

        contact::create([
         
            "first"=>$request->first,
            "second"=>$request->second,
            "messages"=>$request->messages,
            "description"=>$request->description,
            "email"=>$request->email,


        ]);
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts =contact::find($id);
        return view('dashboard.contact.show',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts =contact::find($id);
        return view('dashboard.contact.edit',compact('contacts'));
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
        $contacts =contact::find($id);
      
      
        $contacts->first = $request->first;
        $contacts->second = $request->second;
        $contacts->description = $request->description;
        $contacts->messages = $request->messages;
        $contacts->email = $request->email;
        $contacts->update();
        return redirect()->route('dashboard.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts=contact::find($id);
        $contacts->destroy($id);
        return redirect()->route('dashboard.contact.index');
    }
}
