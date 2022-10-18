<x-frontend-layout>
   <x-sidebar />
   <div>
   <h2 class="no-case mb-4">BNBL Org Chart</h2>
      <div class="mb-4">
         <div class="col-sm-12">
            <p class="u-large-text u-text u-text-variant u-text-2"> 
            Easily visualize your company for your leaders, team and board.
            </p>
         </div>
      </div>
      <div class="custom-row">
         <div class="col-12 text-center">
            <div class="container-box">
               <div class="main-box" data-bs-target="#myModal">
                  <div class="description">Board of Directors</div>
               </div>
            </div>
            <div class="middle-line"></div>   
         </div>
      </div>
      <div class="custom-row">
               <div class="col-4 text-center">
                  <div class="container-box">
                     <div class="main-box-left ceo" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
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
                     <div class="main-box-right ceo">
                        <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                        <div class="description1">Internal Audit Department</div>
                     </div>  
                  </div>
               </div>
      </div>
   
      <div class="col-4 offset-4 text-center">  
            <div class="main-box ceo">
               <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
               <div class="description1">Chief Executive Officer</div>
            </div>
         </div>
         <div class="middle-line"></div>   
      </div>
      <div class="custom-row">
         <div class="col-3 text-center">
            <div class="container-box">
               <div class="main-box-left cs" data-bs-toggle="modal" data-bs-target="#myModal">
                  <img src="{{asset('images/ceo.jpg')}}" alt="" class="img" data-info="{{$ceo->name}}">
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
               <div class="main-box-right bo">
                  <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
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
               <div class="main-box cs">
                  <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                  <div class="description">Corporate Service</div>
               </div>
            </div>
            <div class="middle-line"></div>
         </div>
   
         <div class="col-4 text-center">
            <div class="container-box">
               <div class="main-box ce">
                  <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                  <div class="description">Customer Experience</div>
               </div>
            </div>
            <div class="middle-line"></div>
         </div>
   
         <div class="col-4 text-center">
            <div class="container-box">
               <div class="main-box bo">
                  <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                  <div class="description">Banking Operations</div>
               </div>
            </div>
            <div class="middle-line"></div>
         </div>
      </div>
      <div class="custom-row">
         <div class="col-4 text-center">
            <div class="col-7 offset-2 position-relative">
               <div class="long-line"></div>
               <div class="left-line"></div>
               <div class="middle-line-transparent"></div>
               <div class="right-line"></div>
            </div>
            <div class="col-12">
               <div class="custom-row">
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                        <div class="main-box cs">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                           <div class="description">
                              Finance
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <div class="col-4 offset-3 px-1 text-center">
                     <div class="container-box">
                        <div class="main-box cs">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
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
                        <div class="main-box ce">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                           <div class="description">
                              Digital Transformation
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                        <div class="main-box ce">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                           <div class="description">Customer Service</div>
                        </div>
                     </div>
                  </div>
            
                  <div class="col-4 px-1 text-center">
                     <div class="container-box">
                        <div class="main-box ce">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
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
                        <div class="main-box bo">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
                           <div class="description">
                              Branch Operations
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <div class="col-4 offset-3 px-1 text-center">
                     <div class="container-box">
                        <div class="main-box bo">
                           <img src="{{asset('images/ceo.jpg')}}" alt="" class="img">
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
               <h3>{{$cs->name}}</h3>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               <p></p>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
            <p>Telephone: {{ $cs->contact->extension}}</p>
            <p> Email: {{ $cs->contact->email}}</p>
            </div>
         </div>
         </div>
      </div>
   </div>
   <style>
      .container-box{
         width: 100%;
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
      }
      .ce{
         background:  #d5eeff; 
      }
      .bo{
         background:#ffd6b6; 
      }
      .ceo{
         background: #1e549f;
         
      }

   
      .main-box-left{
         width:fit-content;
         border-bottom-right-radius: 7px;
         min-height: fit-content;
         overflow: hidden;
         border-right: 2px solid #26578C;
         padding: 5px;
         cursor: pointer;
         border-bottom-left-radius: 5px;
         border-top-left-radius: 5px;
         float: right;
      }
      .main-box-right{
         width:fit-content;
         border-bottom-left-radius: 7px;
         min-height: fit-content;
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
         font-size: 12px;
      }
      .description2{
         font-size: 14px;
         color:#26578C;
      }
      .description1{
         color:#fcfefe;
         font-size: 12px;
         font-weight: 500;
      }
      .img{
         height: 60px;
         width: 60px;
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
         height: 30px;
         width: 2px;
         background-color: #26578C;
         margin: auto;
      }
      .middle-line-transparent{
         height: 30px;
         width: 2px;
         margin: auto;
      }
      .middle-line-full{
         height: 100%;
         width: 2px;
         background-color: #26578C;
         margin: auto;
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
   $('.main-box').on('click', function() {
      
      $('.modal-body').html('<h1>'+$(this).data('info')+'</h1>');
   })
  })
</script>
</x-frontend-layout>
