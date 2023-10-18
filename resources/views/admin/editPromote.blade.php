@extends('layouts.admin_layout')

@section('admin_content')

<div class="animate-fade-down flex-col w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Edit Promote Link</p>
    </div>
    <!-- start -->

    <div class="flex-shrink p-4 mb-4">
        <div class="flex flex-col justify-center bg-white  rounded-lg h-full">
            <div class="p-4 mb-4 bg-white rounded-lg">
                <form action="{{route('admin.updatePromoteRealEstate' , ['realEstate' => $realEstate->id] )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-6 gap-6 font-poppin">
                        <input class="hidden" name="realEstate_id" id="realEstate_id" value="{{$realEstate->id}}" >

                    <!-- facbook -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Facbook </label>
                            @if($realEstate->advertisements()->where('name', 'facbook')->get()->first()->URL)
                            <input placeholder="url facbook ..." value="{{$realEstate->advertisements()->where('name', 'facbook')->get()->first()->URL}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_facbook" id="url_facbook" type="string" />
                            @else
                            <input placeholder="url facbook ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_facbook" id="url_facbook" type="string" />
                            @endif
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div class="grid grid-cols-2 gap-3 font-poppin">
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Start </label>
                                        @if($errors->has('error_date_start_facbook'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_start_facbook') }}
                                            </div>
                                        @endif
                                </div>
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Expired </label>
                                        @if($errors->has('error_date_expired_facbook'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_expired_facbook') }}
                                            </div>
                                        @endif
                                </div>

                            </div>
                            <div class="grid grid-cols-2 gap-3 font-poppin">

                                @if($realEstate->advertisements()->where('name', 'facbook')->get()->first()->ad_start)
                                <input value="{{$realEstate->advertisements()->where('name', 'facbook')->get()->first()->ad_start}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_facbook" id="ad_start_facbook" type="date" />
                                @else
                                <input class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_facbook" id="ad_start_facbook" type="date" />
                                @endif

                                @if($realEstate->advertisements()->where('name', 'facbook')->get()->first()->ad_expired)
                                <input value="{{$realEstate->advertisements()->where('name', 'facbook')->get()->first()->ad_expired}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_facbook" id="ad_expired_facbook" type="date" />
                                @else
                                <input class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_facbook" id="ad_expired_facbook" type="date" />
                                @endif
                            </div>
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Dehome </label>
                            @if($realEstate->advertisements()->where('name', 'dehome')->get()->first()->URL)
                            <input placeholder="url dehome ..." value="{{$realEstate->advertisements()->where('name', 'dehome')->get()->first()->URL}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_dehome" id="url_dehome" type="string" />
                            @else
                            <input placeholder="url dehome ..."  class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_dehome" id="url_dehome" type="string" />
                            @endif
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                        <div class="grid grid-cols-2 gap-3 font-poppin">
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Start </label>
                                        @if($errors->has('error_date_start_dehome'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_start_dehome') }}
                                            </div>
                                        @endif
                                </div>
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Expired </label>
                                        @if($errors->has('error_date_expired_dehome'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_expired_dehome') }}
                                            </div>
                                        @endif
                                </div>

                            </div>
                            <div class="grid grid-cols-2 gap-3 font-poppin">
                                @if($realEstate->advertisements()->where('name', 'dehome')->get()->first()->ad_start)
                                <input placeholder="url dehome ..." value="{{$realEstate->advertisements()->where('name', 'dehome')->get()->first()->ad_start}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_dehome" id="ad_start_dehome" type="date" />
                                @else
                                <input placeholder="url dehome ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_dehome" id="ad_start_dehome" type="date" />
                                @endif
                                @if($realEstate->advertisements()->where('name', 'dehome')->get()->first()->ad_expired)
                                <input value="{{$realEstate->advertisements()->where('name', 'dehome')->get()->first()->ad_expired}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_dehome" id="ad_expired_dehome" type="date" />
                                @else
                                <input placeholder="url dehome ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_dehome" id="ad_expired_dehome" type="date" />
                                @endif
                            </div>
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Shopee </label>
                            @if($realEstate->advertisements()->where('name', 'shopee')->get()->first()->URL)
                            <input placeholder="url shopee ..." value="{{$realEstate->advertisements()->where('name', 'shopee')->get()->first()->URL}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_shopee" id="url_shopee" type="string" />
                            @else
                            <input placeholder="url shopee ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_shopee" id="url_shopee" type="string" />
                            @endif
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                        <div class="grid grid-cols-2 gap-3 font-poppin">
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Start </label>
                                        @if($errors->has('error_date_start_shopee'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_start_shopee') }}
                                            </div>
                                        @endif
                                </div>
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Expired </label>
                                        @if($errors->has('error_date_expired_shopee'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_expired_shopee') }}
                                            </div>
                                        @endif
                                </div>

                            </div>
                            <div class="grid grid-cols-2 gap-3 font-poppin">
                                @if($realEstate->advertisements()->where('name', 'shopee')->get()->first()->ad_start)
                                <input placeholder="url shopee ..." value="{{$realEstate->advertisements()->where('name', 'shopee')->get()->first()->ad_start}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_shopee" id="ad_start_shopee" type="date" />
                                @else
                                <input placeholder="url shopee ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_shopee" id="ad_start_shopee" type="date" />
                                @endif
                                @if($realEstate->advertisements()->where('name', 'shopee')->get()->first()->ad_expired)
                                <input placeholder="url shopee ..." value="{{$realEstate->advertisements()->where('name', 'shopee')->get()->first()->ad_expired}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_shopee" id="ad_expired_shopee" type="date" />
                                @else
                                <input placeholder="url shopee ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_shopee" id="ad_expired_shopee" type="date" />
                                @endif
                            </div>
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Google </label>
                            @if($realEstate->advertisements()->where('name', 'google')->get()->first()->URL)
                            <input placeholder="url google ..." value="{{$realEstate->advertisements()->where('name', 'google')->get()->first()->URL}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_google" id="url_google" type="string" />
                            @else
                            <input placeholder="url google ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                            name="url_google" id="url_google" type="string" />
                            @endif
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                        <div class="grid grid-cols-2 gap-3 font-poppin">
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Start </label>
                                        @if($errors->has('error_date_start_google'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_start_google') }}
                                            </div>
                                        @endif
                                </div>
                                <div class="grid grid-cols-2 gap-3 font-poppin">
                                    <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Date Expired </label>
                                        @if($errors->has('error_date_expired_google'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('error_date_expired_google') }}
                                            </div>
                                        @endif
                                </div>

                            </div>
                            <div class="grid grid-cols-2 gap-3 font-poppin">
                                @if($realEstate->advertisements()->where('name', 'google')->get()->first()->ad_start)
                                <input placeholder="url google ..." value="{{$realEstate->advertisements()->where('name', 'google')->get()->first()->ad_start}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_google" id="ad_start_google" type="date" />
                                @else
                                <input placeholder="url google ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_start_google" id="ad_start_google" type="date" />
                                @endif
                                @if($realEstate->advertisements()->where('name', 'google')->get()->first()->ad_expired)
                                <input placeholder="url google ..." value="{{$realEstate->advertisements()->where('name', 'google')->get()->first()->ad_expired}}" class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_google" id="ad_expired_google" type="date" />
                                @else
                                <input placeholder="url google ..." class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" 
                                name="ad_expired_google" id="ad_expired_google" type="date" />
                                @endif
                            </div>
                        </div>








                        <!-- ช่องว่าง -->
                        <div class="col-span-6 mt-4">
                            <div class="col-span-6 sm:col-span-6"></div>
                        </div>

                        <a href="http://localhost/admin/promoteList/{{$realEstate->id}}/edit" class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-red-600 bg-red-100 border border-red-100 rounded-lg shadow-inner group">
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
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <!-- end3 -->

</div>


@endsection