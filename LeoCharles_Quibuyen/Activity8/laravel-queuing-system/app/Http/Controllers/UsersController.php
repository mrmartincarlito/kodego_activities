<?php

namespace App\Http\Controllers;

use App\Models\regular;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function store(Request $request)
    {
        $regular = new Regular();

        $regular->id = $request->name;


        $regular->save();


        return $request->id . "" . $request->name;
    }




    function index()
    {
        return regular::all();
    }



    function update(Request $request, $id)
    {
        $regular = regular::all();



        $regular->save();

        return $regular;
    }




    function show($id)
    {
        return regular::find($id);
    }


    function destroy($id)
    {
        $regular = regular::find($id);
        $regular->delete();

        return "Deleted regular";
    }



function total($id) {


        return regular::count($id);
}






}
