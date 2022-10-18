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
        $ceo = Employee::with('contact')->where('employee_id','2006100136')->first();
        $cs = Employee::with('contact')->where('employee_id','2008080112')->first();
        $ia = Employee::with('contact')->where('employee_id','2001060108')->first();
        $rd = Employee::with('contact')->where('employee_id','2001040905')->first();
        $smd = Employee::with('contact')->where('employee_id','1995021302')->first();
        $cos = Employee::with('contact')->where('employee_id','1995021302')->first();
        $cex = Employee::with('contact')->where('employee_id','2022090108')->first();
        $bo = Employee::with('contact')->where('employee_id','2022090106')->first();
        $fin = Employee::with('contact')->where('employee_id','2003100113')->first();
        $hra = Employee::with('contact')->where('employee_id','1993120702')->first();
        $dtd = Employee::with('contact')->where('employee_id','2003072507')->first();
        $cse = Employee::with('contact')->where('employee_id','1997070109')->first();
        $ito = Employee::with('contact')->where('employee_id','2005020103')->first();
        $bro = Employee::with('contact')->where('employee_id','1996040101')->first();
        $rem = Employee::with('contact')->where('employee_id','1996121104')->first();
    	// return $employees;
    	return view('frontend.vehicle',compact('ceo','cs','ia','rd','smd','cos','cex','bo','fin','hra','dtd','cse','ito','bro','rem'));
    }
}
