<x-frontend-layout>
   <x-sidebar />
   @if(session('status') == '0')
         <div class="alert alert-danger text-center" style=" margin: 50px; font-weight:normal;" >
      {{ session('msg') }}
          </div>
   @endif
   <div class="content ">
      <div class="container-fluid grey-background">
         <div class="content">
            <div class="container-fluid p-0">
               <section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
                  <div class="my-auto">
                     <h2 class="no-case mb-4">BNB Employee Directory</h2>
                     <div class="mb-3">
                        <p class="u-large-text u-text u-text-variant home"> 
                        Employee Directory is all about people and connecting employees. An employee directory hosts contacts, job-related and personal information of all the banks employees. Employee directory allows co-workers to collaborate across verticals, departments and divisions and helps the onboarding of new employees. 
                        </p>
                     </div>
                     <div class="box wrapper mb-4 container ">
                        <div class="counter col_fourth">
                           <i class="fa-solid fa-users fa-2x"></i>
                           <p id='0101' class="fs-2 count-title count-number"></p>
                           <p class="count-text ">Total Employees</p>
                        </div>
                        <div class="counter col_fourth">
                           <div class="row" style="padding-top:0px;">
                              <div class="column" style="padding-top:0px;">
                              <i class="fa-solid fa-person-dress fa-2x"></i>
                              <p id='0105' class="fs-2 count-title count-number wrap"></p>
                                 <p class="count-text">Female</p>
                                
                              </div>
                              <div class="column" style="padding-top:0px;">
                              <i class="fa-solid fa-person fa-2x"></i>

                              <p id='0106' class="fs-2 count-title count-number wrap"></p>
                                 <p class="count-text">Male</p>
                              </div>
                           </div>
                        </div>
                        <div class="counter col_fourth">
                        <i class="fa-solid fa-sitemap fa-2x"></i>
                           <p id='0102' class="fs-2 count-title count-number"></p>
                           <p class="count-text">Departments</p>
                        </div>
                        <div class="counter col_fourth">
                           <i class='fas fa-external-link-alt fa-2x'></i>
                           <div class="row" style="padding-top:0px;">
                              <div class="column" style="padding-top:0px;">
                              <p id='0103' class="fs-2 count-title count-number"></p>
                                 <p class="count-text">Extensions</p>
                               
                              </div>
                              <div class="column" style="padding-top:0px;">
                              <p id='0104' class="fs-2 count-title count-number"></p>
                                 <p class="count-text">Branch</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <body onload="load()">
                        <script>
                           function animate(obj, initVal, lastVal, duration) {
                           let startTime = null;
                           
                           //get the current timestamp and assign it to the currentTime variable
                           let currentTime = Date.now();
                           
                           //pass the current timestamp to the step function
                           const step = (currentTime ) => {
                           
                           //if the start time is null, assign the current time to startTime
                           if (!startTime) {
                           startTime = currentTime ;
                           }
                           
                           //calculate the value to be used in calculating the number to be displayed
                           const progress = Math.min((currentTime - startTime)/ duration, 1);
                           
                           //calculate what to be displayed using the value gotten above
                           obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
                           
                           //checking to make sure the counter does not exceed the last value (lastVal)
                           if (progress < 1) {
                           window.requestAnimationFrame(step);
                           } else {
                              window.cancelAnimationFrame(window.requestAnimationFrame(step));
                           }
                           };
                           //start animating
                           window.requestAnimationFrame(step);
                           }
                           let text1 = document.getElementById('0101');
                           let text2 = document.getElementById('0102');
                           let text3 = document.getElementById('0103');
                           let text4 = document.getElementById('0104');
                           let text5 = document.getElementById('0105');
                           let text6 = document.getElementById('0106');
                           const load = () => {
                           animate(text1, 1000, {{count($employees)}}, 3000);
                           animate(text2, 100, 11, 3000);
                           animate(text3, 100, 26, 3000);
                           animate(text4, 100, 12, 3000);
                           animate(text5, 100, 229, 3000);
                           animate(text6, 100, 307, 3000);
                           }
                        </script>
                     </body>
                     
                     <div class="mb-5">
                       
                        <div class="row mb-3 form-row">
                        <form class="d-block" method="POST" action="{{ route('search_directory_path') }}">
                        @csrf
                        <div class="row mb-3">
                           <div class="col-sm-2 form-group">
                              <input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name" autofocus>
                           </div>
                        <div class="col-sm-2 form-group">
                           <input type="text" name="flexcube" class="form-control form-sz-lg" placeholder="Flexcube ID">
                        </div>
                        <div class="col-sm-2 form-group">
                        <input type="text" name="vehicle_number" class="form-control form-sz-lg" placeholder="Vehicle Number">
                        </div>
                        <div class="col-sm-3 form-group">
                        <select name="department" class="form-control form-sz-lg">
                        <option selected="selected" value="0">Select Department</option>
                        @foreach($departments as $d)
                        <option value="{{ $d->id }}"> {{ $d->name }} </option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-sm-2 form-group">
                        <select name="location" class="form-control form-sz-lg">
                        <option selected="selected" value="0">Select Location</option>
                        @foreach($locations as $l)
                        <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-sm-1 form-group">
                        <button type="submit" class="form-control form-sz-lg btn btn-block " >
                           <i class="fas fa-search fa-lg" style="margin-right: 10px;"></i></button>
                        </div>
                        </div>
                        </form>
                        </div>
                        <div class="col-md-12 mb-3 ">
                           <p class=" u-large-text u-text u-text-variant u-text-2 ">
                              <i class="far fa-bell fa-fw fa-2x" ></i><b>Notification:</b>
                              <br>
                              Keeping all the above fields blank will view all the employees.
                              <br>
                              Keeping one or two above fields blank will ignore the blank fields.  
                           </p>
                           <hr style="height:2px; width:100%;text-align:left;margin-left:0 height">
    <p style="float: right; font-family: 'Century Gothic', sans-serif; font-size: 8pt; color: #808080; line-height: 1.6; font-weight: normal;" >
    Disclaimer: The information provided by us on directory.lan.bnb is for internal informational purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implies, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the Site. UNDER NO CIRCUMSTANCES SHALL WE HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF SITE OR RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE. YOUR USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN RISK.
    </p>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</x-frontend-layout>

