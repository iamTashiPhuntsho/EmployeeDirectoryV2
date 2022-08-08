@extends('layouts.frontend-layout')

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"><i class="fas fa-bars" id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{asset ('images/bnb.png')}}" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Employee Directory </span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"><i class='fas fa-home'></i> <span class="nav_logo-name">Dashboard</span> </a> 
                <a href="#" class="nav_link"> <i class="fas fa-car-alt"></i> <span class="nav_name">Vehicle Details</span> </a> 
                <a href="#" class="nav_link"> <i class="fas fa-user-edit"></i> <span class="nav_name">Edit Your Informations</span> </a>
                 <a href="#" class="nav_link"> <i class="fas fa-user-plus"></i> <span class="nav_name">Register Your Information</span> </a> 
                 <a href="#" class="nav_link"><i class="fas fa-address-book"></i> <span class="nav_name">Generate Report</span> </a> 
                 <a href="#" class="nav_link"> <i class="fas fa-signature"></i> <span class="nav_name">Generate Mail Signature</span> </a> 
            </div>
        </nav>
    </div>
    <!--Container Main start-->
 <script>
    
document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });

 </script>  
</body>


    <!--Container Main end-->
    <!--Container Main end-->