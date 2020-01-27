<?php

namespace App\Http\Controllers\api;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emp = new Employee();
        $data = $emp->all();
        return response()->json([
            'data' => $data,
            'error' => false,
            'msg' => 'All Employees are shown'
        ]);

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
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        $obj->pass = $request->pass;
        if($obj->save())
            return response()->json([
                'data' => $obj,
                'error' => false,
                'msg' => 'Inserted Succesfully'
            ]);
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
        //
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
        //
        $obj = new Employee();
        $obj=$obj->find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        $obj->pass = $request->pass;
        if($obj->save())
            return response()->json([
                'data' => $obj,
                'error' => false,
                'msg' => 'updated Succesfully'
            ]);
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
        $obj = new Employee();
        $obj=$obj->find($id);
        if($obj->delete())
            return response()->json([
                'data' => $obj,
                'error' => false,
                'msg' => 'Deleted Succesfully'
            ]);

    }
}
