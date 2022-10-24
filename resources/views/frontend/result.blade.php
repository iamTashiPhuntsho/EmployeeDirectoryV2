<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <div class="mb-3">
         <h2 class="title2">Found {{ $records->count() }} result(s) matching the search</h2>
         <h5 class="title2 text-center">
            <small>Ordering of search result is based on alphabetical order of Employees' name</small>
         </h5>
      </div>
      <div class="row">
         @if($records->count() == 0)
         <div class="title2 text-center mt-5">
            <h4>No record were found matching the query.</h4>
            <small>Please try with different search key words.</small>
            <br>
            <a href="{{ route('get_search_path') }}" class="btn text-white btn-primary px-3 py-1 mt-3">
            Back to Search Parameters
            </a>
         </div>
         @else
         @foreach($records->sortby('name') as $r)
         <div class="col-lg-4 p-2">
            <div class="card card-emp" style="width: 18rem;">
               <img  class= "emp-img" src='{{ asset("storage/employee_images/$r->image")}}'>
               <div class="card-body">
                  <h5 class="title bnb-blue">{{ $r->name }}</h5>
                  <h6 class="bnb-blue title2" style="font-size: 14px;">{{ $r->title }}</h6>
                  <small><i class="fa-solid fa-id-badge fa-fw me-2"></i>{{ blank($r->employee_id) ? "N/A" : $r->employee_id }}</small><small class="ms-4">
                  <i class="fa-solid fa-phone fa-fw me-2"></i>{{ blank($r->contact->extension) ? "N/A" : $r->contact->extension }}</small><br>
                  @if(!blank($r->flexcube))
                  <small><i class="fa-solid fa-cube fa-fw me-2"></i>{{ $r->contact->flexcube }}</small><br>
                  @endif
                  @if(!blank($r->contact->mobile))
                  <small><i class="fa-solid fa-mobile fa-fw me-2"></i>{{ blank($r->contact->mobile) ? "N/A" : $r->contact->mobile }}</small><br>
                  @endif
                  <small><i class="fa-solid fa-envelope fa-fw me-2"></i>{{ blank($r->contact->email) ? "N/A" : $r->contact->email }}</small><br>
                  @if(!blank($r->vehicle_no))
                  <small><i class="fa-solid fa-car-rear fa-fw me-2"></i>{{ blank($r->vehicle_no) ? "N/A" : $r->vehicle_no }}</small><br>
                  @endif
                  <a href="{{ route('show_result_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department),Crypt::encryptString($param_vehicle_number)]) }}" class="link bg-bnb-blue text-white position-absolute end-0 px-2">
                  <small>view detail<i class="fas fa-arrow-right"></i></small>
                  </a>
               </div>
            </div>
         </div>
         @endforeach
         @endif
      </div>
   </div>
</x-frontend-layout>