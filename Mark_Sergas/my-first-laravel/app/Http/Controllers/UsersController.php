<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Inserting of records
     */
    function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->age = $request->age;

        $employee->save();

        return $employee;
    }

    /**
     * Showing all values
     */
    function index()
    {
        //Select * from employee
        return Employee::all();
    }

    /**
     * Update function
     *  */  
    function update(Request $request, $id)
    {
        return $id ."I am updated to - " . $request->name;
    }

    /**
     * Deleting a record
     */
    function destroy($id)
    {
        //Delete from Employee where id = $id
        $employee = Employee::find($id);
        $employee->delete();

        return "Succefully deleted.";
    }

    /**
     * Showing 1 record
     */
    function show($id)
    {
        //Select * from employee where id = $id
        return Employee::find($id);
    }

    function thisIsMyTestFunction(Request $request)
    {
        return ($request->age < 18) ? "Minor" : "Not minor";
    }
}
