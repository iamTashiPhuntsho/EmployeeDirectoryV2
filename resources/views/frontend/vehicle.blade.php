<x-frontend-layout>
   <x-sidebar />
   <div class="pb-5 pe-5">
      <div class="mb-4">
      </div>
      <div class="custom-row">
         <div class="col-12 text-center">
            <h4>Corporate Office Organogram</h4>
            <div class="col-sm-12">
            <p class="u-large-text u-text u-text-variant home">
            Organizational Chart is the visual representation of the banks structure. This chart clearly outlines the hierarchy within the bank and indicates the relationships shared amongst each individual employee. 
            </p>
         </div>
            <div class="container-box">
               <div class="main-box">
                  <div class="description3">Board of Directors</div>
               </div>
            </div>
            <div class="middle-line"></div>
         </div>
      </div>
      <div class="custom-row">
         <div class="col-4 text-center">
            <div class="container-box">
            <div class="main-box-left ceo" style = "position:relative; left:82px;">
            <img src="{{asset('images/default1.png')}}" alt="" class="img">
                  <div class="description1">Company Secretary</div>
               </div>
            </div>
         </div>
         <div class="col-4 text-center">
            <div class="long-line"></div>
            <div class="middle-line-full"></div>
         </div>
         <div class="col-4 text-center">
            <div class="container-box">
            <div class="main-box-right ceo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$ia}}" style = "position:relative; right:82px;">
            <img src='{{asset("storage/employee_images/$ia->image")}}' alt="" class="img">
                  <div class="description1">Internal Audit Department</div>
               </div>
            </div>
         </div>
      </div>
      <div class="coll-4 offset-4 text-center">
         <div class="container-box">
         <div class="main-box ceo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$ceo}}" style = "position:relative; bottom:82px;">
         <img src='{{asset("storage/employee_images/$ceo->image")}}' alt="" class="img">
               <div class="description1">Chief Executive Officer</div>
            </div>
         </div>

      </div>
      <div class="custom-row">
         <div class="col-3 text-center">
            <div class="container-box">
            <div class="main-box-left cs" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$rd}}" style = "position:relative; left:80px;">
            <img src='{{asset("storage/employee_images/$rd->image")}}' alt="" class="img">
                  <div class="description">Risk Department</div>
               </div>
            </div>
         </div>
         <div class="col-6 text-center">
            <div class="long-line"></div>
            <div class="middle-line-full"></div>
         </div>
         <div class="col-3 text-center">
            <div class="container-box">
            <div class="main-box-right bo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$smd}}" style = "position:relative; right:80px;">
            <img src='{{asset("storage/employee_images/$smd->image")}}' alt="" class="img">
                  <div class="description">Strategy Management Department</div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-8 offset-2 text-center">
         <div class="middle-line-full"></div>
         <div class="long-line"></div>
         <div class="position-relative">
            <div class="middle-line"></div>
            <div class="right-line"></div>
            <div class="left-line"></div>
         </div>
      </div>
      <div class="custom-row">
         <div class="col-4 text-center">
            <div class="container-box">
            <div class="main-box cs" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$cos}}" style = "position:relative; bottom:7px;">
            <img src='{{asset("storage/employee_images/$cos->image")}}' alt="" class="img">
                  <div class="description">Corporate Service</div>
               </div>
            </div>
            <div class="middle-line1" style = "position:relative; bottom:9px; height:11px;"></div>
         </div>
         <div class="col-4 text-center">
            <div class="container-box">
            <div class="main-box ce" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$cex}}" style = "position:relative; bottom:5px;">
            <img src='{{asset("storage/employee_images/$cex->image")}}' alt="" class="img">
                  <div class="description">Customer Experience</div>
               </div>
            </div>
            <div class="middle-line1" style = "position:relative; bottom:5px; height:24px;"></div>
         </div>
         <div class="col-4 text-center">
            <div class="container-box">
            <div class="main-box bo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$bo}}" style = "position:relative; bottom:5px;">
            <img src='{{asset("storage/employee_images/$bo->image")}}' alt="" class="img">
                  <div class="description">Banking Operations</div>
               </div>
            </div>
            <div class="middle-line1" style = "position:relative; bottom:7px; height:15px;"></div>
         </div>
      </div>
      <div class="custom-row" style = "position:relative; bottom:18px;">
         <div class="col-4 text-center">
            <div class="col-7 offset-2 position-relative">
               <div class="long-line" style = "width:88%;margin-left:25px"></div>
               <div class="left-line" style = "bottom:25px;left:25px"></div>
               <div class="middle-line-transparent"></div>
               <div class="right-line"></div>
            </div>
            <div class="col-12">
               <div class="custom-row">
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box cs" style = "position:relative; bottom:25px;left:25px">
                     <img src="{{asset('images/default1.png')}}" alt="" class="img">
                           <div class="description">
                              Finance
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-4 offset-3 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box cs" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$hra}}" style = "position:relative; bottom:25px;">
                     <img src='{{asset("storage/employee_images/$hra->image")}}' alt="" class="img">
                           <div class="description">Human Resource Administration</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-4 text-center">
            <div class="col-8 offset-2 position-relative">
               <div class="long-line"></div>
               <div class="left-line"></div>
               <div class="middle-line"></div>
               <div class="right-line"></div>
            </div>
            <div class="col-12">
               <div class="custom-row">
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box ce" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$dtd}}" style = "position:relative; bottom:12px;">
                     <img src='{{asset("storage/employee_images/$dtd->image")}}' alt="" class="img">
                           <div class="description">
                              Digital Transformation
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box ce" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$cse}}" style = "position:relative; bottom:12px;">
                     <img src='{{asset("storage/employee_images/$cse->image")}}' alt="" class="img">
                           <div class="description">Customer Service</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box ce" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$ito}}" style = "position:relative; bottom:12px;">
                     <img src='{{asset("storage/employee_images/$ito->image")}}' alt="" class="img">
                           <div class="description">IT Operations</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-4 text-center">
            <div class="col-7 offset-3 position-relative">
               <div class="long-line"></div>
               <div class="left-line"></div>
               <div class="middle-line-transparent"></div>
               <div class="right-line"></div>
            </div>
            <div class="col-12">
               <div class="custom-row">
                  <div class="col-4 offset-1 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box bo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$bro}}" style = "position:relative; bottom:25px;">
                     <img src='{{asset("storage/employee_images/$bro->image")}}' alt="" class="img">
                           <div class="description">
                              Branch Operations
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-4 offset-3 px-1 text-center">
                     <div class="container-box">
                     <div class="main-box bo" data-bs-toggle="modal" data-bs-target="#myModal" data-info="{{$rem}}" style = "position:relative; bottom:25px;">
                     <img src='{{asset("storage/employee_images/$rem->image")}}' alt="" class="img">
                           <div class="description">Remedial Management</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="name"></h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>
               <!-- Modal body -->
               <div class="modal-body" >
 
               <div class="row">
  <div class="column">
  <div class="content"></div>
  </div>
  <div class="column">
  <img alt="" style="height: 10rem;" class="img-thumbnail" id="img">
  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      .container-box{
      width: 100%;
      }
      .column {
  float: left;
 
   /* Should be removed. Only for demonstration */
}
@media (max-width: 48rem){
   .pb-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
    min-height: 100vh;
}
}.coll-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
  height:1px; 
}

      .modal-header h4{
         margin-bottom: 0rem;
         font-size: 1.7rem;
         font-weight: 600;
         color: #1C4E80;
         
      }
      .modal-header{
         border-bottom: 1.5px solid #1C4E80;
      }
      .modal-body p{
         font-size: 14px;
      }
      .main-box{
      width:fit-content;
      border-radius: 5px;
      margin:auto;
      overflow: hidden;
      border-bottom: 2px solid #26578C;
      padding: 5px;
      cursor: pointer;
      }
      .cs{
      background: #e0ffcd;
      height:85px;
  width: 85px;
      }
      .ce{
      background:  #d5eeff;
      height:80px;
  width: 85px;
      }
      .bo{
      background:#ffd6b6;
      height:80px;
  width: 85px;
      }
      .ceo{
      background: #1e549f;
      height:80px;
  width: 85px;
      }
      .main-box-left{
     
      border-bottom-right-radius: 7px;
      height:80px;
  width: 85px;
      overflow: hidden;
      border-right: 2px solid #26578C;
      padding: 5px;
      cursor: pointer;
      border-bottom-left-radius: 5px;
      border-top-left-radius: 5px;
      float: right;
      }
      .main-box-right{
     
      border-bottom-left-radius: 7px;
  height:80px;
  width: 85px;
      overflow: hidden;
      border-left: 2px solid #26578C;
      padding: 5px;
      cursor: pointer;
      border-bottom-right-radius: 5px;
      border-top-right-radius: 5px;
      float: left;
      }
      .description{
      color:#26578C;
      font-size: 9px;
      }
      .description2{
      font-size: 9px;
      color:#26578C;
      }
      .description3{
      font-size:13px;
      color:#26578C;
      }
      .description1{
      color:#fcfefe;
      font-size: 9px;
      font-weight: 500;
      }
      .img{
      height: 35px;
      width: 35px;
      border-radius: 50px;
      border: 2px solid #ffff;
      }
      .custom-row{
      display: inline-flex;
      margin: 0;
      padding: 0;
      width: 100%;
      height: fit-content;
      }
      .no-padding{
      padding: 0 !important;
      margin: 0 !important;
      }
      .circle{
      height: 10px;
      width: 10px;
      background: red;
      margin: auto;
      }
      .row-l{
      border-radius: 5px;
      border-left: 2px solid #26578C;
      }
      .label{
      border-bottom: 2px solid #26578C;
      width: 50px;
      border-radius: 10px;
      }
      .label-right{
      border-left: 2px solid #26578C;
      width: 50px;
      height: 200px;
      border-radius: 10px;
      }
      .middle-line{
      height: 17px;
      width: 2px;
      background-color: #26578C;
      margin: auto;
      }
      .middle-line1{
      width: 2px;
      margin: auto;
      background-color: #26578C;
      
      }
      .middle-line-transparent{
      height: 30px;
      width: 2px;
      margin: auto;
      }
      .middle-line-full{
      height: 110%;
      width: 2px;
      background-color: #26578C;
      margin: auto;
      }
      .left-line1{
      height: 120px;
      width: 2px;
      background-color: #26578C;
      position: absolute;
      left: 0;
      top: 0;
      }
      .right-line1{
      height: 120px;
      width: 2px;
      background-color: #26578C;
      position: absolute;
      right: 0;
      top: 0;
      }
      .left-line{
      height: 30px;
      width: 2px;
      background-color: #26578C;
      position: absolute;
      left: 0;
      top: 0;
      }
      .right-line{
      height: 30px;
      width: 2px;
      background-color: #26578C;
      position: absolute;
      right: 0;
      top: 0;
      }
      .long-line{
      margin-top: 0;
      width: 100%;
      height: 2px;
      background: #26578C;
      }
      .side-line{
      margin-top: 0;
      width: 100%;
      height: 2px;
      background: #26578C;
      }
   </style>
<script>
  $(document).ready(function () {
   $(".main-box,.main-box-right,.main-box-left").on('click', function() {
      var emp = $(this).data('info');
      $('.name').text(emp.name);
      $('#img').attr('src','/storage/employee_images/'+emp.image);
      $('.content').html('<h5 style="color: #1C4E80"><b>'+emp.title+'</h5>');
      $('.content').append('<h5>Extension: '+emp.contact.extension+'</h5>');
      $('.content').append('<h5>Mobile No: '+emp.contact.mobile+'</h5>');
      $('.content').append('<h5>Email: '+emp.contact.email+'</h5>');
      })
  })
</script>
</x-frontend-layout>
 
 
 
 
 

