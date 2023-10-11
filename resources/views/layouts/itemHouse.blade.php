<!-- item -->
<div class="relative w-full overflow-hidden  rounded-lg bg-white shadow-md hover:scale-110 duration-300">
            <a href="#">
            <img class="rounded-t-lg" src="{{ URL::asset($house->getImageRealEstate($house)) }}" />
            </a>
            <span
                class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-red-700 text-center text-sm text-white">HOT
                SALE</span>
            <div class="mt-4 px-5 pb-5">
                <!-- Name -->
                <a href="#">
                    <h5 class="text-mb font-semibold tracking-tight text-slate-900 m-3">{{$house->address}}</h5>
                </a>

                <div class="text-sm m-3 text-slate-700">
                    <h5> {{$house->detail}}</h5>
                    <h5> {{$house->tambon}},{{$house->amphoe}},{{$house->province}}</h5>
                    
                    
                </div>

                <div class="flex items-center justify-between">
                    <p>
                        <span class="text-2xl font-bold text-slate-900">฿ {{number_format($house->getPrice($house))}}</span>
                        
                    </p>
                    
                </div>
            </div>
        </div>