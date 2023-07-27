<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\Student;

class AddressController extends Controller
{
    public function addAddress(){
        $students = Student::all();
        return view('address', compact('students'));
    }

    public function storeAddress(Request $request){
        $address = array(
            'students_id' => $request->studentname,
            'country' => $request->country,
        );
        Address::create($address);
        return redirect()->route('add.address');
    }

    public function index(){
        $students = Student::all();
        return view('studentdata',compact('students'));
    }
}
