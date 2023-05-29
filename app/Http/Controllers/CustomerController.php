<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all();

        // dd($data);
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required'
        ]);
        $data = Customer::create($request->all());
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Customer::find($id);
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Customer::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required'
        ]);
        $data->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $id)
    {
        $id->delete();
        return redirect('/');
    }
}
