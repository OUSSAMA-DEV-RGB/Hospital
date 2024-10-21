<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\View\Components\AppLayout;
use database\migrations\doctors;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->role=='0'){
                $stranger = Doctor::all();
                return view('user.home' , compact('stranger'));
            }else{
                return view('admin.home');
            }
        }
        else{   
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $stranger = Doctor::all();
      
        
             return view('user.home' , compact('stranger'));
        }
        
        // add in table doctor new  doctors 
        
    }
    public function appointment(Request $request){
        $data = new Appointment;

        $data->name = $request->name ;
        
        $data->email = $request->email ;
        
        $data->phone = $request->phone ;
        
        $data->doctor = $request->doctor ;
        
        $data->date = $request->date ;
        
        $data->message = $request->message ;
        
        $data->status = 'In progress' ;

        if(Auth::id()){
            $data->user_id = Auth::user()->id ;
        }
        $data->save();

        return redirect()->back()->with('message' , 'Appointment Request Successful we will contact with you soon thank you for writing to us ');
  
    }
    public function myappointment(){

        // this function in order to show appointment spesific user with id the user
    if(Auth::id()){
         $userid = Auth::user()->id;
         $appointment = Appointment::where('user_id' , $userid )->get();
        return view('user.my_appointment' , compact('appointment'));
    }
    else{
        return redirect()->back();
    }
       
    }
    public function cancel_appoint($id){
      $data = Appointment::find($id);
      $data->delete();
      return redirect()->back()->with('message' , 'delete your appointment is done  ');
    }
}
