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
        $ceo = Employee::with('contact')->where('id','1')->first();
        //$cs = Employee::with('contact')->where('id','2')->first();
        $ia = Employee::with('contact')->where('id','2')->first();
        $rd = Employee::with('contact')->where('id','3')->first();
        $smd = Employee::with('contact')->where('id','4')->first();
        $cos = Employee::with('contact')->where('id','5')->first();
        $cex = Employee::with('contact')->where('id','6')->first();
        $bo = Employee::with('contact')->where('id','7')->first();
        //$fin = Employee::with('contact')->where('id','9')->first();
        $hra = Employee::with('contact')->where('id','1')->first();
        $dtd = Employee::with('contact')->where('id','8')->first();
        $cse = Employee::with('contact')->where('id','9')->first();
        $ito = Employee::with('contact')->where('id','10')->first();
        $bro = Employee::with('contact')->where('id','1')->first();
        $rem = Employee::with('contact')->where('id','1')->first();
    	  // return $employees;
    	return view('frontend.vehicle',compact('ceo','ia','rd','smd','cos','cex','bo','hra','dtd','cse','ito','bro','rem'));
    }
}