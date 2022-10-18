<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Location;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class VehicleController extends Controller
{
    public function vehicle(){
        $ceo = Employee::with('contact')->find(1);
        $cs = Employee::with('contact')->find(2);
        $ia = Employee::with('contact')->find(3);
        $rd = Employee::with('contact')->find(4);
        $smd = Employee::with('contact')->find(5);
        $cos = Employee::with('contact')->find(6);
        $cex = Employee::with('contact')->find(7);
        $bo = Employee::with('contact')->find(8);
        $fin = Employee::with('contact')->find(9);
        $hra = Employee::with('contact')->find(10);
        $dtd = Employee::with('contact')->find(11);
        $cse = Employee::with('contact')->find(12);
        $ito = Employee::with('contact')->find(13);
        $bro = Employee::with('contact')->find(14);
        $rem = Employee::with('contact')->find(15);
    	// return $employees;
    	return view('frontend.vehicle',compact('ceo','cs','ia','rd','smd','cos','cex','bo','fin','hra','dtd','cse','ito','bro','rem'));
    }
}
