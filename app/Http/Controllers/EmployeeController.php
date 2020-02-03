<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $employee = new Employee;
            $employee->name = $data['name'];
            $employee->totalleave = $data['totalleave'];
            $employee->email = $data['email'];
            $employee->password = $data['password'];
            $employee->save();
        }
        return view('admin.addEmployee');
    }
}
