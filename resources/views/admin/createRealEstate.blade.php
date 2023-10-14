@extends('layouts.admin_layout')

@section('admin_content')

<div class="animate-fade-down flex-col w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Edit Profile</p>
    </div>
    <!-- start -->

    <div class="flex-shrink p-4 mb-4">
        <div class="flex flex-col justify-center bg-white  rounded-lg h-full">
            <div class="p-4 mb-4 bg-white rounded-lg">
                <form action="{{route('admin.createRealEstate.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="grid grid-cols-6 gap-6 font-poppin">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="address" class="block mb-2 text-lg font-medium text-gray-900">Address</label>
                            <input placeholder="address"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="address" id="address" />
                            <label
                                class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">

                            </label>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="coordinates"
                                class="block mb-2 text-lg font-medium text-gray-900  w-10">Coordinates</label>
                            <input placeholder="ETC. 18.317997, 99.397170"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="coordinates" id="coordinates" />
                        </div>


                        <div class="col-span-6 sm:col-span-3 grid grid-cols-3 gap-4 border border-gray-200 p-2 rounded">
                            <label for="detail Address"
                                class="block mb-2 text-lg font-medium text-gray-900  w-full">Detail Address</label>
                            <div></div>
                            <div></div>
                            <!-- 1 -->
                            <select id="input_province" name="input_province"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">เลือกจังหวัด</option>
                                @foreach($provinces as $item)
                                <option value="{{ $item->province }}">{{ $item->province }}</option>
                                @endforeach

                            </select>

                            <!-- 2 -->
                            <select id="input_amphoe" name="input_amphoe"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">เลือกเขต/อำเภอ</option>
                                @foreach($amphoes as $item)
                                <option value="{{ $item->amphoe }}">{{ $item->amphoe }}</option>
                                @endforeach

                            </select>
                            <!-- 3 -->
                            <select id="input_tambon" name="input_tambon"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">เลือกแขวง/ตำบล</option>
                                @foreach($tambons as $item)
                                <option value="{{ $item->tambon }}">{{ $item->tambon }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3 grid grid-cols-3 gap-4 border border-gray-200 p-2 rounded">
                            <label for="detail Address"
                                class="block mb-2 text-lg font-medium text-gray-900  w-full">Detail RealEstate</label>
                            <div></div>
                            <div></div>

                            <!-- 1 -->
                            <select id="input_type_real_estate" name="input_type_real_estate"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">ประเภท</option>
                                <option value="house">บ้านเดี่ยว</option>
                                <option value="twinhouse">บ้านคู่</option>
                                <option value="townhouse">ทาวน์เฮาส์</option>
                                <option value="land">ที่ดิน</option>

                            </select>

                            <!-- 2 -->
                            <select id="input_bedroom" name="input_bedroom"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">ห้องนอน</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4+">4+</option>

                            </select>
                            <!-- 3 -->
                            <select id="input_bathroom" name="input_bathroom"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">ห้องน้ำ</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4+">4+</option>

                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Area </label>
                            <input placeholder="sq m."
                                class="peer w-full border-b border-blue-gray-200 bg-transparent  font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="area" id="area" type="number" />
                        </div>
                        <div class="col-span-6 row-span-2 sm:col-span-3 mt-2">
                            <label for="detail" class="block mb-2 text-lg font-medium text-gray-900">Detail</label>
                            <textarea id="detail" name="detail" rows="7" placeholder="text here"
                                class="block w-full rounded-md border border-gray-300 focus:border-indigo-600 py-2 px-3 text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-5"></textarea>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="price" class="block mb-2  text-lg font-medium text-gray-900 ">Price </label>
                            <input placeholder="bath"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="price" id="price" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Assigned to Staff </p>
                        </div>
                        <div class="col-span-6 sm:col-span-3"></div>
                        <div class="col-span-6 sm:col-span-3">
                        <select id="staff_id" name="staff_id"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">เลือกแขวง/ตำบล</option>
                                @foreach($staffs as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3"></div>

                        <div class="col-span-6 sm:col-span-3">
                            <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Agreement</p>
                        </div>
                        <div class="col-span-6 sm:col-span-3"></div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="date_start" class="block mb-2  text-lg font-medium text-gray-900 ">Date Start
                                Agreement</label>
                            <input placeholder="DD/MM/YYYY"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent  font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="date_start" id="date_start" type="date" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="date_expired" class="block mb-2  text-lg font-medium text-gray-900 ">Date
                                Expired Agreement</label>
                            <input placeholder="DD/MM/YYYY"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent  font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="date_expired" id="date_expired" type="date" />
                        </div>

                        <!-- start image -->
                        <div class="col-span-6 mt-4 border p-3">
                            <label>Upload RealEstate Images</label>
                            <input type="file" name="input_image[]" multiple class="form-control" id="inputImage" accept=".jpeg, .jpg, .png">
                            <div class="grid grid-cols-4 gap-2 col-span-6 sm:col-span-1" id="imagePreviewContainer">
                            </div>
                        </div>

                        <!-- ช่องว่าง -->
                        <div class="col-span-6 mt-4">
                            <div class="col-span-6 sm:col-span-6"></div>
                        </div>

                        <a href="{{route('admin.createRealEstate')}}"
                            class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-red-600 bg-red-100 border border-red-100 rounded-lg shadow-inner group">
                            <span
                                class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-red-600 group-hover:w-full ease"></span>
                            <span
                                class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-red-600 group-hover:w-full ease"></span>
                            <span
                                class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                            <span
                                class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-red-600 group-hover:h-full ease"></span>
                            <span
                                class="absolute inset-0 w-full h-full duration-300 delay-300 bg-red-900 opacity-0 group-hover:opacity-100"></span>
                            <span
                                class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Clear
                            </span>
                        </a>


                        <div class="col-span-6 sm:col-span-2"></div>
                        <div class="col-span-6 sm:col-span-2"></div>
                        <button type="submit"
                            class="col-span-6 sm:col-span-1 relative px-7 py-3 m-3 overflow-hidden font-medium text-green-600 bg-green-100 border border-green-100 rounded-lg shadow-inner group">
                            <span
                                class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-green-600 group-hover:w-full ease"></span>
                            <span
                                class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-green-600 group-hover:w-full ease"></span>
                            <span
                                class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                            <span
                                class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-green-600 group-hover:h-full ease"></span>
                            <span
                                class="absolute inset-0 w-full h-full duration-300 delay-300 bg-green-900 opacity-0 group-hover:opacity-100"></span>
                            <span
                                class="flex justify-center relative transition-colors duration-300 delay-200 group-hover:text-white ease">Confirm
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <!-- end3 -->

</div>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

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
// start tambon
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


// end tambon




</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#inputImage').change(function() {
            var input = this;
            var imagePreviewContainer = $('#imagePreviewContainer');
            imagePreviewContainer.empty(); // Clear previous previews

            if (input.files && input.files.length) {
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var imageElement = $('<img>').attr('src', e.target.result).addClass('col-span-1');
                        imagePreviewContainer.append(imageElement);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        });
    });
</script>




@endsection