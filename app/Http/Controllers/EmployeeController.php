<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    function index(){
      $employee = Employee::get(['employee_id', 'employee_name', 'employee_address','employee_phone_number']);
      return view('employee.index', compact('employee'));
    }

    function create(){
      return view('employee.create');
    }

    public function store(Request $request){
      $empId = $request->input('emp_id');
      $empName = $request->input('emp_name');
      $empAddress = $request->input('emp_address');
      $empPhone = $request->input('emp_phone_number');

      echo $empId." <br />".$empName." <br />".$empAddress." <br />".$empPhone;

      Employee::create([
        'employee_id' =>$empId,
        'employee_name' =>$empName,
        'employee_address' =>$empAddress,
        'employee_phone_number' =>$empPhone
      ]);

      return redirect('/Employee');
    }

    public function show($id){
      $employee = Employee::where('employee_id', $id)->get();
      return view('employee.show',compact('employee'));
    }

    public function edit($id){
      $employee = Employee::where('employee_id', $id)->get();
      return view('employee.edit',compact('employee'));
    }

    public function update(Request $request, $id)
    {
      $empId = $request->input('emp_id');
      $empName = $request->input('emp_name');
      $empAddress = $request->input('emp_address');
      $empPhone = $request->input('emp_phone_number');

      Employee::where('employee_id', $id)->update([
        'employee_name' =>$empName,
        'employee_address' =>$empAddress,
        'employee_phone_number' =>$empPhone,
      ]);

      return redirect('/Employee');
    }

    public function destroy($id)
    {
      $employee = Employee::where('employee_id', $id)->first();
      $employee->delete();
      return redirect('/Employee');
    }
}
