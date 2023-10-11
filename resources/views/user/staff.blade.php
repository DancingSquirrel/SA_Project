@extends('layouts.main')

@section('content')
<div>
    <img src="https://www.iconhome.co.th/media/banner/IMG-1639284015782.jpg" alt="">
</div>
<div class="p-10">
    <div class="m-10 ">
        <p class="text-xl">รายชื่อพนักงาน</p>
    </div>
    <div class="container mx-auto">
        <div role="list" aria-label="Behind the scenes People "
            class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
            @foreach ($staffs as $staff)
            @include('layouts.itemStaff')

            @endforeach
        </div>
        <div class="flex justify-center">
            @include('layouts.staff_pagination')
        </div>
    </div>

    @endsection