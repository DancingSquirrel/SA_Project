<div role="listitem" class="relative">
    <div class="rounded overflow-hidden shadow-md bg-white">
        <div class="absolute -mt-20 w-full flex justify-center">
            <div class="h-32 w-32">
                <img src="{{ URL::asset($staff->image_path)}}"
                    alt="Display Picture of Andres Berlin" role="img"
                    class="rounded-full object-cover h-full w-full shadow-md">
            </div>
        </div>
        <div class="px-6 mt-16">
            <h1 class="font-bold text-3xl text-center mb-1">{{$staff->name}}</h1>
            <p class="text-gray-800 text-sm text-center">{{$staff->first_name}} {{$staff->last_name}}</p>
            <p class="text-center text-gray-600 text-base pt-3 font-normal">Tel. {{$staff->phone_number}}</p>
            <p class="text-center text-gray-600 text-base pt-3 font-normal">Email: {{$staff->email}} </p>
            <div class="w-full flex justify-center pt-5 pb-5">
                
                
            </div>
        </div>
    </div>
</div>

<!--  -->


