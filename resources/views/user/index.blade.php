@extends('layouts.main')

@section('content')
<div>
    <img src="https://www.iconhome.co.th/media/banner/IMG-1639284015782.jpg" alt="">
</div>

<div class="p-10">
    <!-- search bar -->
    <div class="border border-gray-300 p-5 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">

        <form action="{{ route('user.index') }}" class="grid grid-cols-1 md:grid-cols-8 gap-6 " method="GET">
            <!-- 1 -->
            <div class="grid grid-cols-4 sm:col-span-4 gap-4 border border-gray-200 p-2 rounded">
                <h3 class="sm:col-span-1 text-xs m-2">เลือกพื้นที่ที่ต้องการค้นหา</h3>


                <!-- 4 -->
                <select id="input_province" name="input_province"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">เลือกจังหวัด</option>
                    @foreach($provinces as $item)
                    <option value="{{ $item->province }}">{{ $item->province }}</option>
                    @endforeach

                </select>

                <!-- 5 -->
                <select id="input_amphoe" name="input_amphoe"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">เลือกเขต/อำเภอ</option>
                    @foreach($amphoes as $item)
                    <option value="{{ $item->amphoe }}">{{ $item->amphoe }}</option>
                    @endforeach

                </select>
                <!-- 5 -->
                <select id="input_tambon" name="input_tambon"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">เลือกแขวง/ตำบล</option>
                    @foreach($tambons as $item)
                    <option value="{{ $item->tambon }}">{{ $item->tambon }}</option>
                    @endforeach

                </select>
        </div>
        <div class="grid grid-cols-4 sm:col-span-4 gap-4 border border-gray-200 p-2 rounded">
                <h3 class="sm:col-span-1 text-xs m-2">รายละเอียด</h3>


                <!-- 4 -->
                <select id="input_type_real_estate" name="input_type_real_estate"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ประเภท</option>
                    <option value="house">บ้านเดี่ยว</option>
                    <option value="twinhouse">บ้านคู่</option>
                    <option value="townhouse">ทาวน์เฮาส์</option>
                    <option value="land">ที่ดิน</option>

                </select>

                <!-- 5 -->
                <select id="input_bedroom" name="input_bedroom"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ห้องนอน</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="4+">4+</option>

                </select>
                <!-- 5 -->
                <select id="input_bathroom" name="input_bathroom"
                    class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ห้องน้ำ</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="4+">4+</option>

                </select>
        </div>
        
            <!-- 2 -->
            
            <div class="grid grid-cols-5 sm:col-span-4 gap-4 border border-gray-200 p-2 rounded">
                <h3 class="sm:col-span-1 text-xs m-2">ราคา</h3>

                <div class="sm:col-span-2 flex border rounded bg-gray-300 items-center p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                    </svg>



                    <input type="number" name="lim_low" id="lim_low"placeholder="ราคาขั้นต่ำ"
                        class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                </div>
                <div class="sm:col-span-2 flex border rounded bg-gray-300 items-center p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
                    </svg>

                    <input type="number" name="lim_high" id="lim_high"placeholder="ราคาห้ามเกิน"
                        class="bg-gray-300 w-full focus:outline-none text-gray-700" />
                </div>
            </div>
        
            <!-- 3 -->
            <div class="sm:col-span-4 flex justify-center">
                <button type
                    class="p-2 border w-1/2 rounded-md bg-gray-800 text-white">Search</button></div>
        </form>    
            
            </div>
            
    </div>
    <!-- end bar -->

    <div class="m-5 ">
        <p>แนะนำ สำหรับคุณ</p>
    </div>

    <div class="grid md:grid-cols-4 gap-6 justify-center p-5">
    @foreach ($realEstateNew as $realEstate)
        @include('layouts.itemHouse')
    
    @endforeach
    </div>
    <div class="flex justify-center">
        @include('layouts.pagination')
    </div>
</div>






<script>   
    function showAmphoes() {
        let input_province = document.querySelector("#input_province");
        let url = "{{ url('/api/amphoes') }}?province=" + input_province.value;
        console.log(url);
        // if(input_province.value == "") return;
        fetch(url)
            .then(response => response.json())
            .then(result => {
                console.log(result);
                //UPDATE SELECT OPTION
                let input_amphoe = document.querySelector("#input_amphoe");
                input_amphoe.innerHTML = '<option value="">กรุณาเลือกเขต/อำเภอ</option>';
                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.amphoe;
                    option.value = item.amphoe;
                    input_amphoe.appendChild(option);
                }
                //QUERY AMPHOES
                showTambons();
            });
    }
function showTambons() {
        let input_province = document.querySelector("#input_province");
        let input_amphoe = document.querySelector("#input_amphoe");
        let url = "{{ url('/api/tambons') }}?province=" + input_province.value + "&amphoe=" + input_amphoe.value;
        console.log(url);        
        // if(input_province.value == "") return;        
        // if(input_amphoe.value == "") return;
        fetch(url)
            .then(response => response.json())
            .then(result => {
                console.log(result);
                //UPDATE SELECT OPTION
                let input_tambon = document.querySelector("#input_tambon");
                input_tambon.innerHTML = '<option value="">กรุณาเลือกแขวง/ตำบล</option>';
                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.tambon;
                    option.value = item.tambon;
                    input_tambon.appendChild(option);
                }
                //QUERY AMPHOES
                showZipcode();
            });
    }
function showZipcode() {
        let input_province = document.querySelector("#input_province");
        let input_amphoe = document.querySelector("#input_amphoe");
        let input_tambon = document.querySelector("#input_tambon");
        let url = "{{ url('/api/zipcodes') }}?province=" + input_province.value + "&amphoe=" + input_amphoe.value + "&tambon=" + input_tambon.value;
        console.log(url);        
        // if(input_province.value == "") return;        
        // if(input_amphoe.value == "") return;     
        // if(input_tambon.value == "") return;
        fetch(url)
            .then(response => response.json())
            .then(result => {
                console.log(result);
                //UPDATE SELECT OPTION
                let input_zipcode = document.querySelector("#input_zipcode");
                input_zipcode.value = "";
                for (let item of result) {
                    input_zipcode.value = item.zipcode;
                    break;
                }
            });
}
//EVENTS
    document.querySelector('#input_province').addEventListener('change', (event) => {
        showAmphoes();
    });
    document.querySelector('#input_amphoe').addEventListener('change', (event) => {
        showTambons();
    });
    document.querySelector('#input_tambon').addEventListener('change', (event) => {
        showZipcode();
    });
</script>
@endsection