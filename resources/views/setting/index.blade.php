@extends('layouts.setting_layout')

@section('setting_content')
   <div class="animate-fade-down flex-col w-full p-2">
		<div class="flex-shrink max-w-full px-4 w-full">   
								<p class="text-4xl font-poppin text-gray-900 mt-3 mb-5">Profile</p>
		</div>     
<!-- start -->

	<div class="flex-shrink p-4 mb-4  w-full "> 
		<div class="flex flex-col justify-center bg-white rounded-lg h-full">
			<div class="p-4 mb-4 bg-white rounded-lg">
            <form action="#">
                <div class="grid grid-cols-6 gap-6 font-poppin">
					
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block mb-2 text-lg font-medium text-gray-900">Name</label>
                        <input value="{{$user->name}}" readonly class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
						name="name" id="name"/>
    						<label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
      					
    						</label>
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 w-10">Email</label>
                        <input value="{{$user->email}}" readonly class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
						name="email" id="email"/>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="first_name" class="block mb-2  text-lg font-medium text-gray-900 ">First Name  </label>
                        <input value="{{$user->first_name}}" readonly  class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
						name="first_name" id="first_name"/>
    						
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="last_name" class="block mb-2  text-lg font-medium text-gray-900 ">Last Name  </label>
                        <input value="{{$user->last_name}}" readonly  class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
						name="last_name" id="last_name"/>
    						
                    </div>
					<div class="col-span-6 sm:col-span-3">
                        <label for="phone_number" class="block mb-2  text-lg font-medium text-gray-900 ">Phone Number  </label>
                        <input value="{{$user->phone_number}}" readonly class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
						name="phone_number" id="phone_number"/>
                    </div>
					
					
					<!-- ช่องว่าง -->
					<!-- <div class="col-span-6 mt-4">
                        <div class="col-span-6 sm:col-span-6"></div>
                    </div> -->
                </div>
            </form>
        </div>
		</div>

	</div>


		
 <!-- end3 -->
    
    </div>
    @endsection