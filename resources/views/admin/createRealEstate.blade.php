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
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">เลือกจังหวัด</option>
                                @foreach($provinces as $item)
                                <option value="{{ $item->province }}">{{ $item->province }}</option>
                                @endforeach

                            </select>

                            <!-- 2 -->
                            <select id="input_amphoe" name="input_amphoe"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">เลือกเขต/อำเภอ</option>
                                @foreach($amphoes as $item)
                                <option value="{{ $item->amphoe }}">{{ $item->amphoe }}</option>
                                @endforeach

                            </select>
                            <!-- 3 -->
                            <select id="input_tambon" name="input_tambon"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">ประเภท</option>
                                <option value="house">บ้านเดี่ยว</option>
                                <option value="twinhouse">บ้านคู่</option>
                                <option value="townhouse">ทาวน์เฮาส์</option>
                                <option value="land">ที่ดิน</option>

                            </select>

                            <!-- 2 -->
                            <select id="input_bedroom" name="input_bedroom"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">ห้องนอน</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4+">4+</option>

                            </select>
                            <!-- 3 -->
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
                        <div class="col-span-6 sm:col-span-3">
                            <label for="area" class="block mb-2  text-lg font-medium text-gray-900 ">Area </label>
                            <input placeholder="sq m."
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
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
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="price" id="price" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <p class="text-4xl text-gray-900 font-poppin mt-3 mb-5">Assigned to Staff </p>
                        </div>
                        <div class="col-span-6 sm:col-span-3"></div>
                        <div class="col-span-6 sm:col-span-3">
                        <select id="staff_id" name="staff_id"
                                class=" appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="date_start" id="date_start" type="date" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="date_expired" class="block mb-2  text-lg font-medium text-gray-900 ">Date
                                Expired Agreement</label>
                            <input placeholder="DD/MM/YYYY"
                                class="peer w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                name="date_expired" id="date_expired" type="date" />
                        </div>
                        <!-- start image -->
                        <div class="col-span-6 mt-4">
                                <main class="container mx-auto max-w-screen-lg h-full">
                                    <!-- file upload modal -->
                                    <article aria-label="File Upload Modal"
                                        class="relative h-full flex flex-col bg-white shadow-xl rounded-md"
                                        ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"
                                        ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                        <!-- overlay -->
                                        <div id="overlay"
                                            class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                            <i>
                                                <svg class="fill-current w-12 h-12 mb-3 text-blue-700"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                                </svg>
                                            </i>
                                            <p class="text-lg text-blue-700">Drop files to upload</p>
                                        </div>

                                        <!-- scroll area -->
                                        <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                                            <header
                                                class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                                <p
                                                    class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                                    <span>Drag and drop your</span>&nbsp;<span>images anywhere or</span>
                                                </p>
                                                <input id="hidden-input" name="input_images[]" type="file" multiple class="hidden" />
                                                <button id="button" type="button"
                                                    class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                    Upload a file
                                                </button>
                                            </header>

                                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                                To Upload
                                            </h1>

                                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                                <li id="empty"
                                                    class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                                    <img class="mx-auto w-32"
                                                        src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                                        alt="no data" />
                                                    <span class="text-small text-gray-500">No files selected</span>
                                                </li>
                                            </ul>
                                        </section>

                                        
                                    </article>
                                </main>


                            <!-- using two similar templates for simplicity in js code -->
                            <template id="file-template">
                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                    <article tabindex="0"
                                        class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                        <img alt="upload preview"
                                            class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                        <section
                                            class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                            <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                            <div class="flex">
                                                <span class="p-1 text-blue-800">
                                                    <i>
                                                        <svg class="fill-current w-4 h-4 ml-auto pt-1"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                        </svg>
                                                    </i>
                                                </span>
                                                <p class="p-1 size text-xs text-gray-700"></p>
                                                <button
                                                    class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path class="pointer-events-none"
                                                            d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </section>
                                    </article>
                                </li>
                            </template>

                            <template id="image-template">
                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                    <article tabindex="0"
                                        class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                        <img alt="upload preview"
                                            class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                        <section
                                            class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                            <h1 class="flex-1"></h1>
                                            <div class="flex">
                                                <span class="p-1">
                                                    <i>
                                                        <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                        </svg>
                                                    </i>
                                                </span>

                                                <p class="p-1 size text-xs"></p>
                                                <button
                                                    class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path class="pointer-events-none"
                                                            d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </section>
                                    </article>
                                </li>
                            </template>
                        </div>
                        <!-- end image -->

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

//start image scrip

const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    addFile(gallery, file);
  }
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (target.classList.contains("delete")) {
    const ou = target.dataset.target;
    document.getElementById(ou).remove(ou);
    gallery.children.length === 1 && empty.classList.remove("hidden");
    delete FILES[ou];
  }
};

// print all selected files
// document.getElementById("submit").onclick = () => {
//   alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
//   console.log(FILES);
// };

// clear entire selection
document.getElementById("cancel").onclick = () => {
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  FILES = {};
  empty.classList.remove("hidden");
  gallery.append(empty);
};

</script>

<style>
.hasImage:hover section {
  background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
  background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
  opacity: 0;
}

#overlay.draggedover {
  background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
  opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
  color: #2b6cb0;
}
</style>

@endsection