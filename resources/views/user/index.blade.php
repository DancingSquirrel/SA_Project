@extends('layouts.main')

@section('content')
<div>
    <img src="https://www.iconhome.co.th/media/banner/IMG-1639284015782.jpg" alt="">
</div>

<div class="p-10">
    <!-- search bar -->
    <div class="border border-gray-300 p-5 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">

        <div class="grid grid-cols-1 md:grid-cols-6 gap-6 ">
            <!-- 1 -->

            <div class="sm:col-span-1 flex border rounded bg-gray-300 items-center p-2 ">
                <input type="text" placeholder="พิมพ์หรือเลือกจังหวัด,เขต"
                    class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
            </div>


            <!-- 2 -->
            <div class="grid grid-cols-5 sm:col-span-4 gap-4 border border-gray-200 p-2 rounded">
                <h3 class="sm:col-span-1">ราคา</h3>

                <div class="sm:col-span-2 flex border rounded bg-gray-300 items-center p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                    </svg>



                    <input type="text" placeholder="Enter text here..."
                        class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                </div>
                <div class="sm:col-span-2 flex border rounded bg-gray-300 items-center p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
                    </svg>

                    <input type="text" placeholder="Enter text here..."
                        class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                </div>
            </div>
            <div></div>
            <!-- 3 -->
            <div class="sm:col-span-1 flex border rounded bg-gray-300 items-center p-2 ">
                <input type="text" placeholder="พิมพ์หรือเลือกจังหวัด,เขต"
                    class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
            </div>
            <!-- 3 -->
            <div class="grid grid-cols-4 sm:col-span-4 gap-4 border border-gray-200 p-2 rounded">
                <h3 class="sm:col-span-1">รายละเอียด</h3>


                <!-- 4 -->
                <select
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option>United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>

                </select>
                <!-- 5 -->
                <select
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option>United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>

                </select>
                <!-- 5 -->
                <select
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option>United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>

                </select>
            </div>
            <div class="flex justify-center"><button
                    class="p-2 border w-full rounded-md bg-gray-800 text-white">Search</button></div>
        </div>
    </div>
    <!-- end bar -->

    <div class="m-5 ">
        <p>แนะนำ สำหรับคุณ</p>
    </div>

    <div class="grid md:grid-cols-4 gap-6 justify-center p-5">
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    @include('layouts.itemHouse')
    </div>
    <div class="flex justify-center">
        @include('layouts.pagination')
    </div>
</div>
@endsection