@extends('layouts.setting_layout')

@section('setting_content')
<div class="animate-fade-down flex-col w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <div class="grid grid-cols-2">
            <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5 sm:col-span-1">Edit Profile</p>
            @if(session('message'))

            <div class="font-regular relative mb-4 block w-1/2 rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100">
                {{session('message')}}
            </div>
            @endif
        </div>
    </div>
    <!-- start -->

    <div class="flex-shrink p-4 mb-4">
        <div class="flex flex-col justify-center bg-white  rounded-lg h-full">
            <div class="p-4 mb-4 bg-white rounded-lg">

                <form action="{{route('setting.editProfile.edit')}}" method="post">
                    @csrf
                    @method('PUT')
                    <input value="{{$user->id}}" class="hidden" name="user_id" id="user_id" />

                    <div class="grid grid-cols-6 gap-6 font-poppin">

                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2">
                                <label for="name" class="col-span-1 block mb-2 text-lg font-medium text-gray-900">Name</label>
                                @if($errors->first('name'))
                                <div class="alert-danger bg-white sm:col-span-1">
                                    <p class="text-xs text-rose-700">*{{$errors->first('name')}} </p>
                                </div>
                                @endif
                            </div>
                            <input value="{{$user->name}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" name="name" id="name" />
                            <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">

                            </label>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2">
                                <label for="email" class="col-span-1 block mb-2 text-lg font-medium text-gray-900">Email</label>
                                @if($errors->first('email'))
                                <div class="alert-danger bg-white sm:col-span-1">
                                    <p class="text-xs text-rose-700">*{{$errors->first('email')}} </p>
                                </div>
                                @endif
                            </div>
                            <input value="{{$user->email}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" name="email" id="email" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2">
                                <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900">First Name</label>
                                @if($errors->first('first_name'))
                                <div class="alert-danger bg-white sm:col-span-2">
                                    <p class="text-xs text-rose-700">*{{$errors->first('first_name')}} </p>
                                </div>
                                @endif
                            </div>
                            <input value="{{$user->first_name}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" name="first_name" id="first_name" />

                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2">
                                <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900">Last Name</label>
                                @if($errors->first('last_name'))
                                <div class="alert-danger bg-white sm:col-span-2">
                                    <p class="text-xs text-rose-700">*{{$errors->first('last_name')}} </p>
                                </div>
                                @endif
                            </div>
                            <input value="{{$user->last_name}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" name="last_name" id="last_name" />

                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2">
                                <label for="phone_number" class="block mb-2 text-lg font-medium text-gray-900">Phone Number</label>
                                @if($errors->first('phone_number'))
                                <div class="alert-danger bg-white sm:col-span-2">
                                    <p class="text-xs text-rose-700">*{{$errors->first('phone_number')}} </p>
                                </div>
                                @endif
                            </div>
                            <input value="{{$user->phone_number}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" name="phone_number" id="phone_number" />
                        </div>


                        <!-- ช่องว่าง -->
                        <div class="col-span-6 mt-4">
                            <div class="col-span-6 sm:col-span-6"></div>
                        </div>

                        <a href="http://localhost/setting/edit" class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-red-600 bg-red-100 border border-red-100 rounded-lg shadow-inner group">
                            <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-red-600 group-hover:w-full ease"></span>
                            <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-red-600 group-hover:w-full ease"></span>
                            <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                            <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                            <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-red-900 opacity-0 group-hover:opacity-100"></span>
                            <span class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Clear
                            </span>
                        </a>


                        <div class="col-span-6 sm:col-span-2"></div>
                        <div class="col-span-6 sm:col-span-2"></div>
                        <button type="submit" class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-green-600 bg-green-100 border border-green-100 rounded-lg shadow-inner group">
                            <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-green-600 group-hover:w-full ease"></span>
                            <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-green-600 group-hover:w-full ease"></span>
                            <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                            <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                            <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-green-900 opacity-0 group-hover:opacity-100"></span>
                            <span class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Confirm
                            </span>
                            </>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <!-- end3 -->

</div>
@endsection