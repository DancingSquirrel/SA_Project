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
                                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                                            Slide</span>
                                        <img src="{{ Storage::url($image_path) }}"
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
                                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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
                                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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