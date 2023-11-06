<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
class AdminController extends Controller
{
    public function adminview()
    {
       return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor = new Doctor;


            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;

            $doctor->name = $request->name;
            $doctor->phone = $request->number;
            $doctor->speciality = $request->speciality;
            $doctor->room = $request->room;

            $doctor->save();

            return redirect()->back()->with('message','Doctor Added Successfully!');

    }

}
