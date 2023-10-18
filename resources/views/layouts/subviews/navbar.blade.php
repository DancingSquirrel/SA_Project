<nav class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex justify-between w-full">
        <img class="w-48" src="https://www.iconhome.co.th/media/website/IMG-1617358689824.png" alt="">

        <div class="hidden md:flex md:items-center md:w-full" id="menu">
            <ul class="w-full md:flex items-center justify-center text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.index')}}">หน้าแรก</a></li>
                <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.welcome')}}">ฝากขายบ้านกับเราฟรี</a></li>
                <li><a class="md:p-4 py-3 px-2 block" href="{{route('user.staff')}}">ทีมงาน</a></li>
                <li><a class="md:p-4 py-3 px-2 block " href="{{route('user.info')}}">เกี่ยวกับเรา</a></li>
            </ul>
        </div>
        <a href="{{ route('login') }}" class="relative px-7 py-3 m-3 overflow-hidden font-medium text-green-600 bg-green-100 border border-green-100 rounded-lg shadow-inner group">
            <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-green-600 group-hover:w-full ease"></span>
            <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-green-600 group-hover:w-full ease"></span>
            <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
            <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
            <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-green-900 opacity-0 group-hover:opacity-100"></span>
            <span class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Login </span>
            </button>

        </a>


</nav>