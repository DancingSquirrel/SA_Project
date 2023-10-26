<nav class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex justify-between w-full">
        <img class="w-52 " src="https://www.iconhome.co.th/media/website/IMG-1617358689824.png" alt="">


        <div class="hidden md:flex md:items-center md:w-full" id="menu">
            <ul class="w-full md:flex items-center justify-center text-base text-gray-700 md:pt-0">
            <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.index')}}">หน้าแรก</a></li>
                <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.welcome')}}">ฝากขายบ้านกับเราฟรี</a></li>
                <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.staff')}}">ทีมงาน</a></li>
                <li><a class="md:p-4 py-3 px-2 block " href="{{route('user.info')}}">เกี่ยวกับเรา</a></li>
                <li><a class="md:p-4 py-3 px-2 block " href="{{route('admin.realEstateList')}}">การจัดการ</a></li>
            </ul>


        </div>
        <a href="{{route('setting.index')}}" class="relative px-7 py-3 m-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
            <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-gray-600 group-hover:w-full ease"></span>
            <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-gray-600 group-hover:w-full ease"></span>
            <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
            <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
            <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-gray-900 opacity-0 group-hover:opacity-100"></span>
            <span class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Account </span>
        </a>

        <form action="{{ route('logout') }}" method='POST'>
            @csrf


            <button type="submit" class="relative px-7 py-3 m-3 overflow-hidden font-medium text-red-600 bg-red-100 border border-red-100 rounded-lg shadow-inner group">
                <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-red-600 group-hover:w-full ease"></span>
                <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-red-600 group-hover:w-full ease"></span>
                <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-red-900 opacity-0 group-hover:opacity-100"></span>
                <span class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Logout </span>
            </button>
        </form>

    </div>


</nav>