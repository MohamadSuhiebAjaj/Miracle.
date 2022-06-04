<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Models\ProductType;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentapController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType $ProductType
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group=Department::all();
        return Response::json($group);
    }
}
