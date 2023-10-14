@extends('layouts.product_layout')

@section('content')
<div class="p-10 font-poppins ">
    <div class="max-w-6xl p-4 mx-auto">
        <div class="flex flex-row mb-24 -mx-4">
            <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
                <div class=" top-0 ">
                    <div class=" mb-6 lg:mb-10 lg:h-96">
                        <!-- carousel -->
                        <div class="max-w-2xl mx-auto">
                            
                            <div id="default-carousel" class="relative" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                    <!-- Item 1 -->
                                    @foreach($realEstate->getImage_paths($realEstate) as $image_path)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <span
                                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl">First
                                            Slide</span>
                                        <img src="{{asset($image_path) }}"
                                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Slider indicators -->
                                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        <span class="hidden">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                        <span class="hidden">Next</span>
                                    </span>
                                </button>
                            </div>

                            
                            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                        </div>
                        <!-- end carousel -->


                        

                        



                    </div>

                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <div class="lg:pl-20 m-10">
                    <div class="mb-6 ">

                        <h2 class="max-w-xl font-semibold leading-loose tracking-wide text-gray-700 md:text-2xl">
                            {{$realEstate->address}}
                        </h2>
                        <h2 class="font-semibold leading-loose tracking-wide text-gray-500 md:text-sm">
                            {{$realEstate->tambon}},{{$realEstate->amphoe}},{{$realEstate->province}}
                        </h2>
                        <h2
                            class="max-w-xl mt-6 mb-6 font-semibold leading-loose tracking-wide text-gray-500 md:text-sm">
                            {{$realEstate->detail}}
                        </h2>

                        <p class="inline-block text-2xl font-semibold text-gray-700 ">
                            <span>฿ {{number_format($realEstate->getPrice($realEstate))}} บาท</span>
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="mb-2 text-lg font-bold text-gray-700 ">Details :</h2>
                        <div class="bg-gray-100 rounded-xl">
                            <div class="p-3 lg:p-5 ">
                                <div class="p-2 rounded-xl lg:p-6 bg-gray-50">
                                    <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                                        <!-- 1 -->
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 ">
                                                    
                                                    <svg class="bi bi-diagram-3 w-7 h-7" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M105.739,244.87v166.957h300.522V244.87H105.739z M256,378.435H155.826c-9.217,0-16.696-7.479-16.696-16.696 s7.479-16.696,16.696-16.696H256c9.217,0,16.696,7.479,16.696,16.696S265.217,378.435,256,378.435z M356.174,311.652H155.826 c-9.217,0-16.696-7.479-16.696-16.696c0-9.217,7.479-16.696,16.696-16.696h200.348c9.217,0,16.696,7.479,16.696,16.696 C372.87,304.174,365.391,311.652,356.174,311.652z"></path> </g> </g> <g> <g> <path d="M456.348,144.696h-90.36L300.772,27.674c-0.073-0.131-0.176-0.233-0.252-0.362C292.001,10.697,274.736,0,256,0 c-18.508,0-35.259,10.09-44.028,26.328c-0.078,0.13-0.181,0.235-0.255,0.367l-65.703,118H55.652 c-27.619,0-50.087,22.468-50.087,50.087v267.13C5.565,489.532,28.033,512,55.652,512h400.696 c27.619,0,50.087-22.468,50.087-50.087v-267.13C506.435,167.164,483.967,144.696,456.348,144.696z M218.568,83.026 c9.185,10.426,22.476,17.148,37.432,17.148c14.939,0,28.218-6.706,37.403-17.112l34.349,61.634H184.23L218.568,83.026z M439.652,428.522c0,9.217-7.479,16.696-16.696,16.696H89.044c-9.217,0-16.696-7.479-16.696-16.696V228.174 c0-9.217,7.479-16.696,16.696-16.696h333.913c9.217,0,16.696,7.479,16.696,16.696V428.522z"></path> </g> </g> </g></svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 ">
                                                        type
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 ">
                                                        {{$realEstate->type}}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 ">
                                                    
                                                    <svg class="bi bi-gpu-card w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40973 4.40973 4.71569 4.21799 5.09202C4 5.51984 4 6.07989 4 7.2V8M4 11V13M4 16V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202 19.782C5.51984 20 6.07989 20 7.2 20H8M11 20H13M16 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V16M20 13V11M20 8V7.2C20 6.0799 20 5.51984 19.782 5.09202C19.5903 4.71569 19.2843 4.40973 18.908 4.21799C18.4802 4 17.9201 4 16.8 4H16M13 4H11" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 ">
                                                        area
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 ">
                                                        {{$realEstate->area}} sq m.
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 3 -->
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 ">
                                                    <svg fill="#000000" class="bi bi-diagram-3 w-7 h-7" height="64px"
                                                        width="64px" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 211.667 211.667" xml:space="preserve">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M211.667,98.551c0,2.209-1.791,4-4,4H201v26.448c0,13.403-7.085,25.178-17.702,31.792l7.999,14.878 c1.046,1.946,0.317,4.371-1.629,5.418c-0.603,0.323-1.251,0.478-1.891,0.478c-1.425,0-2.804-0.764-3.526-2.106l-8.164-15.186 c-3.918,1.395-8.131,2.161-12.522,2.161H48.102c-3.755,0-7.38-0.562-10.802-1.595l-7.86,14.62c-0.722,1.343-2.102,2.106-3.526,2.106 c-0.64,0-1.288-0.154-1.891-0.478c-1.946-1.047-2.675-3.472-1.629-5.418l7.512-13.972c-11.465-6.406-19.239-18.659-19.239-32.699 v-26.448H4c-2.209,0-4-1.791-4-4s1.791-4,4-4h10.667H197h10.667C209.876,94.551,211.667,96.342,211.667,98.551z M4,60.814h43.083 c3.584,0,6.5,2.916,6.5,6.5v8.5c0,2.209,1.791,4,4,4s4-1.791,4-4v-8.5c0-7.995-6.505-14.5-14.5-14.5H4c-2.209,0-4,1.791-4,4 S1.791,60.814,4,60.814z M9.25,48.602h6.833c2.209,0,4-1.791,4-4v-10.5c0-2.209-1.791-4-4-4H9.25c-5.101,0-9.25,4.149-9.25,9.25 S4.149,48.602,9.25,48.602z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 ">
                                                        Bathroom
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 ">
                                                        {{$realEstate->bathroom}}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 4 -->
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 ">
                                                    <svg fill="#000000" class="bi bi-gpu-card w-7 h-7" version="1.1"
                                                        id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                        xml:space="preserve" width="64px" height="64px">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M20.724,388.876v26.819c0,10.099,8.187,18.286,18.286,18.286s18.286-8.187,18.286-18.286v-26.819H20.724z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M454.705,388.876v26.819c0,10.099,8.187,18.286,18.286,18.286c10.099,0,18.286-8.187,18.286-18.286v-26.819H454.705z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <rect y="243.81" width="512" height="131.657">
                                                                    </rect>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M420.854,78.019H91.146c-15.169,0-27.755,11.214-27.755,26.381v49.231l23.963-0.032c-0.26-1.219-0.397-2.3-0.397-3.657 c0-10.941,8.87-19.505,19.81-19.505h298.47c10.941,0,19.81,8.564,19.81,19.505c0,1.357-0.138,2.438-0.397,3.657h23.962v-49.2 C448.61,89.233,436.023,78.019,420.854,78.019z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <polygon
                                                                        points="456.609,183.985 55.214,183.985 32.713,216.99 479.287,216.99 ">
                                                                    </polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 ">
                                                        Bedroom
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 ">
                                                        {{$realEstate->bedroom}}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="listitem"
                        class="border-gray-200 border-t border-b xl:w-full sm:w-3/4 md:w-2/5 relative sm:mb-24 xl:max-w-sm lg:w-2/5">
                        <div class="rounded overflow-hidden shadow-md bg-white mt-10">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="{{ URL::asset($realEstate->user()->get()->first()->image_path) }}"
                                        alt="Display Picture of Andres Berlin" role="img"
                                        class="rounded-full object-cover h-full w-full shadow-md">
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <h1 class="font-bold text-3xl text-center mb-1">
                                    {{$realEstate->user()->get()->first()->name}}</h1>
                                <p class="text-gray-800 text-sm text-center">
                                    {{$realEstate->user()->get()->first()->first_name}}
                                    {{$realEstate->user()->get()->first()->last_name}}</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">Tel.
                                    {{$realEstate->user()->get()->first()->phone_number}}</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">Email:
                                    {{$realEstate->user()->get()->first()->email}}</p>
                                <div class="w-full flex justify-center pt-5 pb-5">


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const $prevButton = document.getElementById('data-carousel-prev');
    const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();
});
</script>

@endsection