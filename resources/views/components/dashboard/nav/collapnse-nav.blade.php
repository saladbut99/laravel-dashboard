<div class="flex flex-col block md:hidden p-4 bg-navbg shadow-lg">
    <div class="flex flex-wrap">
        <div class="flex-auto">
            <button onclick="toggleButton()" id="open" style="display: block;">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button>    
            <button onclick="toggleButtonClose()" id="close" style="display: none;">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button> 
        </div>
        <div class="flex-auto">
            <h1 class="align-center font-bold text-right text-m">John Doe</h1>
        </div>
    </div>
    <div class="flex-auto hidden" id="collapsenav">
        <div class="content-center ">   
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
</div>