
    <div class="w-60 hidden md:block  shadow-lg  bg-navbg" id="navBar">
            
        <div class="content-center mt-20">
         
         {{-- Image and Name --}}
         <center>
             <img src="https://salondesmaires-po.fr/wp-content/uploads/2015/04/speaker-3-v2.jpg" alt="Profile" class="imageborder rounded-full w-20 h-13">
         </center>
             <h1 class="text-center text-2xl font-bold pt-3">{{ $name }}</h1>
        </div>

        {{-- Navbar List Options --}}
        <div class="content-center mt-10">   
             <div class="flex pt-5 text-navgrey hover:text-iceblue">
                 <div class="flex-auto text-center w-10 ">
                     <span class="material-symbols-outlined align-middle">home</span>
                 </div> 
                 <div class="flex-auto w-20 ">     
                     <a href="#">Overviews</a> 
                 </div>  
              </div>

              <div class="flex pt-5 text-navgrey hover:text-iceblue text-iceblue">
                 <div class="flex-auto text-center w-10">
                     <span class="material-symbols-outlined align-middle">mail</span>
                 </div> 
                 <div class="flex-auto w-20">     
                     <a href="#" class="align-right">Orders</a> 
                 </div>  
              </div>

              <div class="flex pt-5 text-navgrey hover:text-iceblue">
                 <div class="flex-auto text-center w-10">
                     <span class="material-symbols-outlined align-middle">person</span>
                 </div> 
                 <div class="flex-auto w-20">     
                     <a href="#" class="align-right">Customers</a> 
                 </div>  
              </div>

              <div class="flex pt-5 text-navgrey hover:text-iceblue">
                 <div class="flex-auto text-center w-10">
                     <span class="material-symbols-outlined align-middle">settings</span>
                 </div> 
                 
                 <div class="flex-auto w-20 hover:text-iceblue">     
                     <a href="#" class="align-right">Settings</a> 
                 </div>  
              </div>

              <div class="flex pt-5 text-navgrey hover:text-iceblue">
                 <div class="flex-auto text-center w-10">
                     <span class="material-symbols-outlined align-middle">logout</span>
                 </div> 
                 
                 <div class="flex-auto w-20">     
                     <a href="#" class="align-right">Log Out</a> 
                 </div>  
              </div>                  
       </div>     
 </div>
