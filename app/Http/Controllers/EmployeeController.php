<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

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
        return view('employee.index', [ 'employees' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('employee.create');
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
          return redirect()->to('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::find($id);
//        dd($data);
        return view('employee.edit', ['data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = new Employee();
        $obj=$obj->find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        $obj->pass = $request->pass;
        if($obj->save())
            return redirect()->to('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = new Employee();
        $obj=$obj->find($id);
        if($obj->delete())
            return redirect()->to('employees');
    }
}
