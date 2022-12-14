
<x-frontend-layout>
   <x-sidebar />
   <a href="javascript:history.back()" class='fas fa-arrow-circle-left btn' style="font-size:32px; position: fixed; background-color: Transparent; color:#26578C; margin: 2rem 2rem 2rem 0.5rem;"></a>   @if(session('status') == '0')
            <div class="alert alert-danger text-center" style=" margin: 50px; font-weight:normal;" >
       {{ session('msg') }}
            </div>
   @endif
   <div class="content ">
      <div class="container-fluid grey-background">
         <div class="content">
            <div class="container-fluid p-0">
               <section class="search-section p-3 p-lg-5 d-block d-column bg-bnb-white" >
                  <div class="my-auto">
                     <h2 class="no-case mb-4">Edit Your Profile On Employee Directory</h2>
                     <div class="mb-5">
                        <p class="u-large-text u-text u-text-variant u-text-2"> 
                           BNBL Employee Directory gives you the access to search various employee all over the extensions located in Bhutan.
                        </p>
                     </div>
                     <h4 class="no-case mb-3">Enter Your OTP below</h4>
                     <div class="mb-5" style="width:70%; margin:auto;">
                       
                           <div class="row mb-3 form-row">
                           <form class="d-block" method="POST" action="{{ route('verify_otp_path') }}">
                        @csrf
                        <div class="row mb-3">
                        <div class="col-sm-8">
                        <input type="text" name="otp" class="form-control text-center form-sz-lg" placeholder="6 Digit OTP" autofocus="autofocus" required="required" maxlength="6" minlength="6">
                      <input type="hidden" name="eid" value="{{ $eid }}">
                        </div>
                        <div class="col-sm-3">
                              <button type="submit" class="form-control form-sz-lg btn-primary btn px-3 py-2 btn-block text-white blue-button" >Verify OTP</button>
                           </div>
                           
                        </div>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <small class="text-danger"><i class="fas fa-exclamation-circle"></i>  {{ $error }}</small><br>
                        @endforeach
                        @endif
                        </form>
                        </div>
                        <div class="col-md-12 d-flex">
                           <p class=" u-large-text u-text u-text-variant u-text-2 mb-5 ">
                              <i class="far fa-bell fa-fw fa-2x" ></i><b>Notification:</b>
                              <br>
                              Check your email or mobile for the OTP.
                              <br>
                              If you didn't receive the OTP, call 1277 or 1265 for assistance.
                              <br>
                              <br>
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
