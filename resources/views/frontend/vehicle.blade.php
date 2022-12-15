<x-frontend-layout>
   <x-sidebar />
   <div class="mb-3">
      <div class="col-12 text-center">
         <h2 class="no-case mb-3">Organogram</h2>
         <div class="mb-3">
            <p class="u-large-text u-text u-text-variant home"> 
               Organizational Chart is the visual representation of the banks structure. This chart clearly outlines the hierarchy within the bank and indicates the relationships shared amongst each individual employee. 
            </p>
         </div>
      </div>
   </div>
   <div class="col-12 text-center">
      <button type="button" class="collapsible button-55">Board of Directors</button>
      <div class="content text-center">
         <div class="gallery2">
            <img src="../images/KT.png" alt="Cinque Terre" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue"  style="font-size: 12px;">Dasho Karma Tshiteem</h5>
               <h6 class="bnb-blue" style="font-size: 12px;">Chairperson</h6>
            </div>
         </div>
         <div class="gallery">
            <img src="../images/kc.png" alt="Forest" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue"  style="font-size: 12px;">Karma Choden</h5>
               <h6 class="bnb-blue" style="font-size: 12px;">Board Director</h6>
            </div>
         </div>
         <div class="gallery">
            <img src="../images/kw.png" alt="Northern Lights" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue"  style="font-size: 12px;">Karma Wangdi</h5>
               <h6 class="bnb-blue" style="font-size: 12px;">Board Director</h6>
            </div>
         </div>
         <div class="gallery">
            <img src="../images/pd.png" alt="Mountains" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue"  style="font-size: 12px;">Passang Dorji</h5>
               <h6 class="bnb-blue"  style="font-size: 12px;">Board Director</h6>
            </div>
         </div>
         <div class="gallery">
            <img src="../images/ty.png" alt="Mountains" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue"  style="font-size: 12px;">Dasho Tenzing Yonten</h5>
               <h6 class="bnb-blue" style="font-size: 12px;">Board Director</h6>
            </div>
         </div>
         <div class="gallery">
            <img src="../images/ABD.png" alt="Mountains" width="600" height="400">
            <div class="desc">
               <h5 class="bnb-blue" style="font-size: 12px;">Aum Dago Beda</h5>
               <h6 class="bnb-blue" style="font-size: 12px;">Board Director</h6>
            </div>
         </div>
      </div>
   </div>
   <div class="col-12 text-center">
      <button type="button" class="collapsible button-55">Corporate Office</button>
      <div class="content text-center">
         <div class="custom-row">
            <div class="col-12 text-center">
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
               <div class="middle-line1" style = "position:relative; bottom:9px; height:15px;"></div>
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
                  <div class="long-line"></div>
                  <div class="left-line"></div>
                  <div class="middle-line-transparent"></div>
                  <div class="right-line" ></div>
               </div>
               <div class="col-12">
                  <div class="custom-row">
                     <div class="col-4 px-1 text-center">
                        <div class="container-box">
                           <div class="main-box cs" style = "position:relative; bottom:25px;">
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
                     <div class="content1"></div>
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
      height:81px;
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
      background: 	#FCE883;
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
      height:81px;
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
      color:#26578C;
      font-size: 9px;
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
      .collapsible {
      cursor: pointer;
      padding: 18px;
      width: 30%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      margin: 10px;
      text-align: center;
      font-weight: 700;
      }
      .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      }
      /* CSS */
      .button-55 {
      align-self: center;
      background-color: #fff;
      background-image: none;
      background-position: 0 90%;
      background-repeat: repeat no-repeat;
      background-size: 4px 3px;
      border-radius: 15px;
      border-style: solid;
      border-width: 2px;
      box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
      box-sizing: border-box;
      color: var(--first-color);
      cursor: pointer;
      display: inline-block;
      font-family: Neucha, sans-serif;
      font-size: 1rem;
      line-height: 23px;
      outline: none;
      padding: .75rem;
      text-decoration: none;
      transition: all 235ms ease-in-out;
     
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      }
      .button-55:hover {
      box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
      transform: translate(0, 2px, 0);
      }
      .button-55:focus {
      box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
      }
      div.gallery {
      margin-left: 30px;
      float: left; 
      width: 190px;
      
      }
      div.gallery2{
      width: 190px;
      margin: auto;
      }
      div.gallery img {
      width: 50%;
      height:auto;
      border-radius: 50%;
      }
      div.gallery2 img {
      width: 50%;
      height: auto;
      border-radius: 50%;
      }
      div.desc {
      padding: 15px;
      text-align: center;
      }
      @media screen and (max-width: 40em) {
  .content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
 
    .gallery{
        flex: 1 1 calc(40% - 1em);
    }
   
   
}
   </style>
   <script>
      $(document).ready(function () {
       $(".main-box,.main-box-right,.main-box-left").on('click', function() {
          var emp = $(this).data('info');
          $('.name').text(emp.name);
          $('#img').attr('src','/storage/employee_images/'+emp.image);
          $('.content1').html('<h5 style="color: #1C4E80"><b>'+emp.title+'</h5>');
          $('.content1').append('<h5>Extension: '+emp.contact.extension+'</h5>');
          $('.content1').append('<h5>Mobile No: '+emp.contact.mobile+'</h5>');
          $('.content1').append('<h5>Email: '+emp.contact.email+'</h5>');
          })
      })
      
      
      var coll = document.getElementsByClassName("collapsible");
      var i;
      
      for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content1 = this.nextElementSibling;
        if (content1.style.display === "block") {
          content1.style.display = "none";
        } else {
          content1.style.display = "block";
        }
      });
      }
   </script>
</x-frontend-layout>