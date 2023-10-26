@extends('layouts.main')

@section('content')
<div class="h-96 flex items-center justify-center animate-fade">
    <div class="w-full h-full shadow-2xl overflow-hidden relative bg-black">
        <video
            src="https://static.vecteezy.com/system/resources/previews/017/039/129/mp4/signing-home-sales-and-insurance-contracts-with-real-estate-agents-signing-contracts-to-know-the-terms-of-buying-and-selling-homes-and-real-estate-contract-signing-ideas-free-video.mp4"
            autoplay="true" loop muted class="absolute inset-0 h-full w-full object-cover opacity-25 fixed"></video>

        <div class="flex flex-col h-full items-center justify-center relative">
            <h1 class="text-2xl text-white tracking-wider m-5" style="z-index: 2;">เราช่วยให้คุณ</h1>
            <h1 class="text-5xl text-white tracking-wider m-5" style="z-index: 2;">ขายได้ ขายเร็ว ทันใจ </h1>
            <h1 class="text-2xl text-white tracking-wider m-5" style="z-index: 2;">ด้วยการตลาดชั้นยอด ครบทุกช่องทาง</h1>
        </div>
    </div>
</div>

<div class="flex flex-col justify-center p-10 bg-gray-200">
    <h1 class="text-3xl text-center text-black tracking-wider font-extrabold m-10 animate-fade-down">
        รับฝากขายบ้าน คอนโด อสังหาริมทรัพย์ ทุกประเภท</h1>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 animate-fade-down">
        <div></div>
        <div></div>
        <a href="https://www.facebook.com/iconhomeclub?locale=th_TH"
            class="sm:col-span-1 px-14 py-3 relative rounded group overflow-hidden font-medium bg-red-50 text-red-900 inline-block">
            <span
                class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-gray-700 group-hover:h-full opacity-90"></span>
            <span class="relative group-hover:text-white text-center"><h5>ติดต่อ สอบถามได้ที่นี่</h5></span>
        </a>
    </div>
    <div class="flex flex-col justify-center items-center animate-fade-down">
        <img class="object-center object-scale-down h-48 w-96 "
            src="https://www.iconhome.co.th/media/content/IMG-1617602959076.png" alt="">
    </div>
</div>
<div class="flex flex-col justify-center items-center bg-white p-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <h4 class="sm:col-span-2 text-center text-3xl mt-20"><strong>ทำไมต้องเลือกฝากขายกับ</strong></h4>
        <img class="mx-auto object-center sm:col-span-2 object-scale-down h-48 w-96" src="https://www.iconhome.co.th/media/texteditor/images/1d7f7abc18fcb43975065399b0d1e48e.png" alt="">
    </div>
</div>
<div class="flex flex-col justify-center items-center bg-white p-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <img src="https://www.iconhome.co.th/media/texteditor/images/58a2fc6ed39fd083f55d4182bf88826d.png" alt="">
        <img src="https://www.iconhome.co.th/media/texteditor/images/2a79ea27c279e471f4d180b08d62b00a.png" alt="">
        <img src="https://www.iconhome.co.th/media/texteditor/images/006f52e9102a8d3be2fe5614f42ba989.png" alt="">
    </div>
</div>








@endsection