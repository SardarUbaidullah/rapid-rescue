<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function add_ambulance(){
        return view('admin.add_ambulance');
    }

    public function add_driver(){
        return view('admin.add_driver');

    }

    public function upload_driver(Request $request){
        $driver = new User();

        $image = $request->image;
        $imagename = time().''.$image->getClientOriginalExtension();
        $request->image->move('driverimage' , $imagename);
        $driver->image = $imagename;

        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->phone = $request->phone;
        $driver->address = $request->address;

        $driver->usertype = "1";
        $driver->password = bcrypt("123456789");
        $driver->save();
        return redirect()->back();
    }

    public function all_driver(){
        return view('admin.all_drivers');
        

    }

    public function dashboard(){
        return view('admin.index');

    }
    public function addambulance(){
        return view('admin.add_ambulance');

    }
    public function allambulances(){
        return view('admin.all_ambulances');

    }
}