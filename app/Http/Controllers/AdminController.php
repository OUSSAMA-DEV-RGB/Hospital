<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor; // Ensure this import is correct
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Import Log

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'room' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
         
        // Check if a file was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('doctorimage', $imagename);

           

            Doctor::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'room' => $request->room,
                'speciality' => $request->speciality,
                'image' => $imagename
            ]);
        
          return redirect()->back()->with('message', 'Doctor added successfully!');
        }

        // If no file is found, return with an error
        return redirect()->back()->with('error', 'No file uploaded.');
    }
    public function showappointment(){
        
          $data = Appointment::all();

          return view('admin.showappointment' , compact('data'));
        
    }
    public function approved($id){
        $approv = Appointment::find($id);
        $approv->status = 'approved';
        $approv->save();
        return redirect()->back();


    }
    public function canceled($id){
        $cancell = Appointment::find($id);
        $cancell->status = 'canceled';
        $cancell->save();
        return redirect()->back();

    }
}
