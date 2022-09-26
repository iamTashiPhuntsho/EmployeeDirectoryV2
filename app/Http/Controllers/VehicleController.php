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
    	$employees = Employee::whereNot('vehicle_no', NULL)->where('status','active')->get();
        $ceo = Employee::find(4);
    	// return $employees;
    	return view('frontend.vehicle',compact('employees','ceo'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $employees = Employee::query()
            ->Where('vehicle_no', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('frontend.vehicle',compact('employees'));
    }
}
