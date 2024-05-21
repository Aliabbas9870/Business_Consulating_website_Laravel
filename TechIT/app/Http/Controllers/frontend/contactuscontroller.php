<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\contactusmodel;
use Illuminate\Http\Request;

class contactuscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.contactus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required',
            'message' => 'required',

        ]);
        // echo "<pre>";
        // print_r($request->all());

        $register = new contactusmodel;
        $register->name = $request['name'];

        $register->email = $request['email'];

        $register->phone = $request['phone'];
        $register->message = $request['message'];

        $register->save();

        return redirect('/contactus');

    }




    public function view()
    {

        $register = contactusmodel::all();
        // echo "<pre>";
        // print_r($register);
        // die;?
        $register = compact('register');

        return view('frontend.contactus')->with($register)->with('success', 'Data Added successfully');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
