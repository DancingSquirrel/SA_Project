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
    <div class="grid md:grid-cols-3 gap-y-24 gap-x-4 justify-center p-5">
            @foreach ($staffs as $staff)
            @include('layouts.itemStaff')

            @endforeach
        </div>
        <div class="flex justify-center">
            @include('layouts.staff_pagination')
        </div>
    </div>

    @endsection