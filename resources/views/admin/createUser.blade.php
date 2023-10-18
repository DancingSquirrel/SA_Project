@extends('layouts.admin_layout')

@section('admin_content')

<div class="animate-fade-down flex-col w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Create Staff</p>
    </div>
    <!-- start -->

    <div class="flex-shrink p-4 mb-4">
        <div class="flex flex-col justify-center bg-white  rounded-lg h-full">
            <div class="p-4 mb-4 bg-white rounded-lg">
                <form action="{{route('admin.createUser.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-6 gap-6 font-poppin">
                        

                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                                <label for="email" class="block mb-2 text-lg font-medium text-gray-900">Email</label>
                                @if($errors->first('name'))
                                <div class="alert-danger bg-white"><p class="text-xs text-rose-700">*{{$errors->first('email')}} </p></div>
                                @endif
                            </div>
                            
                            <input placeholder="email"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="email" id="email" />
                            <label
                                class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">

                            </label>
                        </div>



                        <div class="col-span-6 sm:col-span-3 grid grid-cols-3 gap-2 rounded">
                            <div class="col-span-2 grid grid-cols-2">
                            <label for="role " class="col-span-1 block mb-2 text-lg font-medium sm:col-span-1 text-gray-900  w-full">Role</label>
                                @if($errors->first('role'))
                                <p class="col-span-1 text-xs text-rose-700">*{{$errors->first('role')}} </p>
                                @endif

                                </div>
                          
                            <div></div>
                            <!-- 1 -->
                            <select id="role" name="role"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">เลือกจังหวัด</option>
                                <option value="admin">admin</option>
                                <option value="staff">staff</option>

                            </select>


                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="first_name" class="block mb-2  text-lg font-medium text-gray-900 ">First Name </label>
                                @if($errors->first('first_name'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('first_name')}} </p></div>
                                @endif
                            </div>
                            
                            <input placeholder="sq m."
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="first_name" id="first_name" type="text" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="last_name" class="block mb-2  text-lg font-medium text-gray-900 ">Last Name </label>
                                @if($errors->first('last_name'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('last_name')}} </p></div>
                                @endif
                            </div>
                            <input placeholder="sq m."
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="last_name" id="last_name" type="text" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="name" class="block mb-2 text-lg font-medium text-gray-900  w-10">Name</label>
                                @if($errors->first('name'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('name')}} </p></div>
                                @endif
                            </div>
                            <input placeholder="sir name"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="name" id="name" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="mb-2">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="phone_number" class="block mb-2  text-lg font-medium text-gray-900 ">Phone Number </label>
                                @if($errors->first('phone_number'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('phone_number')}} </p></div>
                                @endif
                            </div>
                                    
                            </div>
                            <input placeholder="sir name"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="phone_number" id="phone_number" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="password" class="block mb-2  text-lg font-medium text-gray-900 ">Password </label>
                                @if($errors->first('password'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('password')}} </p></div>
                                @endif
                            </div>
                            <input placeholder="sq m."
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="password" id="password" type="text" />
                        </div>
                        <div class="col-span-6 row-span-3 sm:col-span-2 mt-2">

                            <div class="flex items-center space-x-6">
                                <div class="shrink-0">
                                    <img id='preview_img'  class="h-44 w-44 object-cover rounded-full"
                                        src="https://imgclothing.com.co/cdn/shop/files/Logo_IMG_invertido-02_2551x.png?v=1668785641"
                                        alt="Current profile photo" />
                                </div>
                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <div>
                                    <input type="file" name='image' onchange="loadFile(event)" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-violet-700
                                            hover:file:bg-violet-100" />
                                    @if($errors->first('image'))
                                        <div class="alert-danger m-1 bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('image')}} </p></div>
                                    @endif
                                    </div>
                                </label>
                            </div>
                                

                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-4 gap-6">
                            <label for="confirm_password" class="block mb-2  text-lg font-medium text-gray-900 ">Confirm Password </label>
                                @if($errors->first('confirm_password'))
                                <div class="alert-danger bg-white sm:col-span-2"><p class="text-xs text-rose-700">*{{$errors->first('confirm_password')}} </p></div>
                                @endif
                            </div>
                                
                            <input placeholder="confirm password"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="confirm_password" id="confirm_password" />
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                        </div>
                        







                        <!-- ช่องว่าง -->
                        <div class="col-span-6 mt-4">
                            <div class="col-span-6 sm:col-span-6"></div>
                        </div>

                        <a href="{{route('admin.createRealEstate')}}"
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
                                class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Clear
                            </span>
                        </a>


                        <div class="col-span-6 sm:col-span-2"></div>
                        <div class="col-span-6 sm:col-span-2"></div>
                        <button type="submit"
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
                                class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Confirm
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <!-- end3 -->

</div>

<script>
        var loadFile = function(event) {
            
            var input = event.target;
            var file = input.files[0];
            var type = file.type;

           var output = document.getElementById('preview_img');


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
</script>

@endsection