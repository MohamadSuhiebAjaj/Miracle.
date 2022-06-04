<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Models\ProductType;
use App\Models\Department;
use Illuminate\Http\Request;

class ProductTypeapController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType $ProductType
     * @return \Illuminate\Http\Response
     */
    public function show($department_id)
    {
        Department::findOrFail($department_id);

        $groups = ProductType::where('department_id',$department_id)->get();
        
        // $dep->photo_g = 'uploads/groups/' . $dep->photo_g;

        return Response::json($groups);
    }
}