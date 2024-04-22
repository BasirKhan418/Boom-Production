<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=" sticky top-4 z-20">
        <!-- ========== HEADER ========== -->
 <header class="inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full ">
     <nav class="relative max-w-[66rem] w-full bg-blue-600 z-20 rounded-[28px] py-3 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto" aria-label="Global">
       <div class="flex items-center justify-between">
         <!-- Logo -->
         <a class="flex justify-center items-center  rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="/boom" aria-label="Preline">
           <img class="h-10 w-10"  src="downloadvaf.png" />
          <h1 class="mx-4 text-white">Boom</h1>
         </a>
         <!-- End Logo -->
   
         <div class="md:hidden">
           <button type="button" class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-neutral-800 text-white disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation" onclick="ToggleClass()">
             <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
             <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
           </button>
         </div>
       </div>
   
       <!-- Collapse -->
       <div id="navbar-collapse" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
         <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/" aria-current="page">Home</a>
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/boom/#pricing">Pricing</a>
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/boom/#review">Reviews</a>
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/boom/#blogs">Blogs</a>
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/boom/boom.php">Meeting</a>
           <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/boom/#blogs">Contact Us</a>
   
           <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:py-4">
             
   
             <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-neutral-800 md:shadow-md rounded-lg p-2 before:absolute top-full before:-top-5 before:start-0 before:w-full before:h-5">
              
               
   
               <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                 Downloads
               </a>
               <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:text-neutral-300 font-medium focus:outline-none focus:text-neutral-300" href="#">
                 Team Account
               </a>
             </div>
           </div>
   
           <div>
           <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              echo '<a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none" href="/boom/logout.php">
             Log Out
           </a>';
            }
            else{
             echo '<a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none" href="/boom/login.php">
             Login/Register
           </a>';
            }
            ?>
           </div>
         </div>
       </div>
       <!-- End Collapse -->
     </nav>
   </header>
   <!-- ========== END HEADER ========== -->
        
     </div>
     <div>
</body>
</html>