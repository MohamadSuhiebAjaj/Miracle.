<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Department;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType $ProductType
     * @return \Illuminate\Http\Response
     */
    public function show($department_id)
    {
        $dep=Department::find($department_id);
        $groups=ProductType::where('department_id',$department_id)->get();
        return view('products.groups', compact('groups','dep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group_s  $group_s
     * @return \Illuminate\Http\Response
     */
    public function edit(group_s $group_s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\group_s  $group_s
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, group_s $group_s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group_s  $group_s
     * @return \Illuminate\Http\Response
     */
    public function destroy(group_s $group_s)
    {
        //
    }
}
