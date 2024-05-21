<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\registermodel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display the form for creating a new resource.
     */
    public function index()
    {
        return view('frontend.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'password' => 'required',

        ]);

        // Validate the incoming request data
        echo '<pre>';
        print_r($request->all());
        $register = new registermodel;
        $register->name = $request['name'];
        $register->service = $request['service'];
        $register->email = $request['email'];
        $register->password = md5($request['password']);
        $register->phone = $request['phone'];
        $register->message = $request['message'];

        $register->save();
        return redirect('/register/view');

    }
    public function view()
    {
        $registers = registermodel::all();
        // echo('<pre>');
        // print_r($registers);
        $data = compact('registers');

        return view('frontend.register_view')->with($data);

    }

    /**
     * Display a listing of the resource.
     */

    /**
     * Delete the specified resource from storage.
     */
    public function delete($id)
    {
        $register = registermodel::find($id);
        if (!is_null($register)) {
            $register->delete();
            return redirect('/register/view')->with('success', 'Data deleted successfully');
        }
        return redirect('/register/view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $register = registermodel::find($id);
        if (!is_null($register)) {
            return view('frontend.edit', compact('register'));
        } else {
            return redirect()->route('register.view')->with('error', 'Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $register = registermodel::find($id);
        if (!is_null($register)) {
            $register->name = $request->input('name');
            $register->service = $request->input('service');
            $register->email = $request->input('email');
            // $register->password = $request->input('password')->nullable()->change();
            // $register->phone = $request->input('phone');
            // $register->message = $request->input('message');
            $register->save();
            return redirect('/register/view')->with('success', 'Data updated successfully');
        } else {
            return redirect('/register/view')->with('error', 'Data not found');
        }
    }

}
