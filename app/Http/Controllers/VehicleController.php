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
        $ceo = Employee::find(1);
        $cs = Employee::find(2);
        $ia = Employee::find(3);
        $rd = Employee::find(4);
        $smd = Employee::find(5);
        $cos = Employee::find(6);
        $cex = Employee::find(7);
        $bo = Employee::find(8);
        $fin = Employee::find(9);
        $hra = Employee::find(10);
        $dtd = Employee::find(11);
        $cse = Employee::find(12);
        $ito = Employee::find(13);
        $bro = Employee::find(14);
        $rem = Employee::find(15);
    	// return $employees;
    	return view('frontend.vehicle',compact('ceo','cs','ia','rd','smd','cos','cex','bo','fin','hra','dtd','cse','ito','bro','rem'));
    }
}
