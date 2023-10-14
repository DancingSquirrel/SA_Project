@extends('layouts.setting_layout')

@section('setting_content')
    <div class="animate-fade-down flex-col w-full p-2">
        <!-- title1 -->
     <div class="flex-shrink max-w-full px-4 w-full">   
                             <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Change Password</p>
     </div>     
<!-- start -->

 <div class="flex-shrink p-4  w-full"> 
     <div class="flex flex-col justify-center bg-white rounded-lg h-full">
         <div class="p-4 bg-white rounded-lg">
            <form action="#">
                 <div class="grid grid-cols-6 gap-6 font-poppin">
                    
                
                     <div class="col-span-6 sm:col-span-3">
                        
                         <label for="address" class="block mb-2  text-lg font-medium text-gray-900 ">Curent Password </label>
                         <input placeholder="09/04/2546" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="address" id="address"/>
                     </div>
                     
                    
                     <div class="col-span-6 sm:col-span-3">
                         <label for="country" class="block mb-2  text-lg font-medium text-gray-900 ">New Password </label>
                         <input placeholder="บ้านพ่อ" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="country" id="country"/>
                         <label for="country" class="block mb-2  text-sm font-medium mt-5"> เงื่อนไข : 1. </label>
                         <label for="country" class="block mb-2  text-sm font-medium mt-5"> 2.</label>
                     </div>
                     <div class="col-span-6 sm:col-span-3"></div>
                     <div class="col-span-6 sm:col-span-3">
                         <label for="city" class="block mb-2  text-lg font-medium text-gray-900 ">Confirm Password </label>
                         <input placeholder="บ้านพ่อ" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="city" id="city"/>
                     </div>
                     
                     <!-- ช่องว่าง -->
                     <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <a href="#_"
                                class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-red-600 bg-red-100 border border-red-100 rounded-lg shadow-inner group">
                                <span
                                    class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-red-600 group-hover:w-full ease"></span>
                                <span
                                    class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-red-600 group-hover:w-full ease"></span>
                                <span
                                    class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                                <span
                                    class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                                <span
                                    class="absolute inset-0 w-full h-full duration-300 delay-300 bg-red-900 opacity-0 group-hover:opacity-100"></span>
                                <span
                                    class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Logout
                                </span>
                            </a>
                        

                        <div class="col-span-6 sm:col-span-2"></div>
                        <div class="col-span-6 sm:col-span-2"></div>
                        <a href="#_"
                                class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-green-600 bg-green-100 border border-green-100 rounded-lg shadow-inner group">
                                <span
                                    class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-green-600 group-hover:w-full ease"></span>
                                <span
                                    class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-green-600 group-hover:w-full ease"></span>
                                <span
                                    class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                                <span
                                    class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                                <span
                                    class="absolute inset-0 w-full h-full duration-300 delay-300 bg-green-900 opacity-0 group-hover:opacity-100"></span>
                                <span
                                    class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Logout
                                </span>
                            </a>

                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                 </div>
             </form>
     </div>
     </div>
     

 </div>
<!-- end -->


 
 </div>

 @endsection