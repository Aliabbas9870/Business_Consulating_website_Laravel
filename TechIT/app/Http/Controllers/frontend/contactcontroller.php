<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\contactmodel;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
        //
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
    public function storeA(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required',
            'message' => 'required',

        ]);


        $register = new contactmodel;
        $register->name = $request['name'];

        $register->email = $request['email'];

        $register->phone = $request['phone'];
        $register->message = $request['message'];

        $register->save();

        return redirect('/contact')->with('success', 'Data has been added successfully');
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
