<template>
    <div class="animate-fade-down flex-col w-full p-2">
        <!-- title1 -->
     <div class="flex-shrink max-w-full px-4 w-full">   
                             <p class="text-3xl font-poppin mt-3 mb-5">Edit Address</p>
     </div>     
<!-- start -->

 <div class="flex-shrink p-4  w-full"> 
     <div class="flex flex-col justify-center bg-white dark:bg-gray-800 rounded-lg h-full">
         <div class="p-4 bg-white rounded-lg">
            <form action="#">
                 <div class="grid grid-cols-6 gap-6 font-poppin">
                    
                    
                     <div class="col-span-6 sm:col-span-3">
                         <label for="address" class="block mb-2  text-lg font-medium text-gray-900 ">Address </label>
                         <input placeholder="09/04/2546" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="address" id="address"/>
                     </div>
                     <div class="col-span-6 sm:col-span-3">
                         <label for="country" class="block mb-2  text-lg font-medium text-gray-900 ">Country </label>
                         <input placeholder="บ้านพ่อ" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="country" id="country"/>
                     </div>
                     <div class="col-span-6 sm:col-span-3">
                         <label for="city" class="block mb-2  text-lg font-medium text-gray-900 ">City </label>
                         <input placeholder="บ้านพ่อ" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="city" id="city"/>
                     </div>
                     <div class="col-span-6 sm:col-span-3">
                         <label for="zip_code" class="block mb-2  text-lg font-medium text-gray-900 ">Zip/postal code </label>
                         <input placeholder="บ้านพ่อ" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                         name="zip_code" id="zip_code"/>
                     </div>
                     
                     <!-- ช่องว่าง -->
                     <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                    <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div>
                     <div class="col-span-6 sm:col-span-2">
                        <button className="btn btn-outline btn-error w-full">Cancel</button>
                     </div>
                     
                        <div class="col-span-6 sm:col-span-2"></div>
                    
                     <div class="col-span-6 sm:col-span-2 flex justify-end">
                        <button class="btn btn-outline btn-accent w-full">Accent</button>
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

</template>

<script setup lang="ts">
definePageMeta({
layout: "setting-account-layout",
});

</script>