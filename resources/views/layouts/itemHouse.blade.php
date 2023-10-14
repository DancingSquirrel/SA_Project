<!-- item -->
<div class="relative w-full overflow-hidden  rounded-lg bg-white shadow-md hover:scale-110 duration-300">
            <a href="{{ route('realEstate', ['realEstate' => $realEstate]) }}">
            
            <img class="rounded-t-lg img img-responsive" src="{{ asset($realEstate->getImage_paths($realEstate)->firstOrFail()) }}"  />
            </a>
            <span
                class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-red-700 text-center text-sm text-white">HOT
                SALE</span>
            <div class="mt-4 px-5 pb-5">
                <!-- Name -->
                <a href="#">
                    <h5 class="text-mb font-semibold tracking-tight text-slate-900 m-3">{{$realEstate->address}}</h5>
                </a>

                <div class="text-sm m-3 text-slate-700">
                    <h5> {{$realEstate->detail}}</h5>
                    <h5> {{$realEstate->tambon}},{{$realEstate->amphoe}},{{$realEstate->province}}</h5>
                    
                    
                </div>

                <div class="flex items-center justify-between">
                    <p>
                        <span class="text-2xl font-bold text-slate-900">฿ {{number_format($realEstate->getPrice($realEstate))}}</span>
                        
                    </p>
                    
                </div>
            </div>
        </div>