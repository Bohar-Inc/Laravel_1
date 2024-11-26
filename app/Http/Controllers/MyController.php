<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class MyController extends Controller
{
    function savedata(Request $req){
       $tbl = new Employee;
       parse_str($req->input('data'), $formData);

        $tbl->name=$formData['name'];
        $tbl->email=$formData['email'];
        $tbl->password=$formData['pswd'];
        $tbl->mobile=$formData['mobile'];

        $tbl->save();
        echo "Data inserted successfully";

    }
}
