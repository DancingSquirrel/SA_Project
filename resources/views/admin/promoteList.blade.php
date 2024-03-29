@extends('layouts.admin_layout')

@section('admin_content') <div class="animate-fade-down mx-full w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-3xl font-poppin pt-3 pb-5">Promote List</p>
    </div>
    <div class="flex flex-wrap flex-col">


        <div class="m-8 bg-white rounded-lg shadow-md m-3  ">

            <div class="flex flex-wrap flex-row mx-4">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <div class="md:flex md:justify-between">
                        <div>

                        </div>

                        <div>

                            <form action="{{ route('admin.promoteList') }}" method="GET" class="dataTable-top flex flex-row justify-between m-5">
                                <div class="flex justify-center p-3" id="bulk-actions">
                                    @if(Auth::user()->role == 'staff')
                                    <label class="flex flex-wrap flex-row">
                                        <select id="input_id_user" name="input_id_user"
                                            class="inline-block leading-5 relative  px-8 py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mx-1 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                                            <option value="">All</option>
                                            <option value="{{Auth::user()->id}}">My List</option>
                                        </select>
                                    </label>
                                    @endif
                                </div>
                                <div class="flex justify-center p-3" id="bulk-actions">
                                    <label class="flex flex-wrap flex-row ">
                                        <select id="status" name="status" class="inline-block leading-5 relative px-8 py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mx-1 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                                            <option value="">Select status</option>
                                            <option value="success">success</option>
                                            <option value="unsuccess">unsuccess</option>
                                            
                                        </select>
                                    </label>
                                </div>
                                <div class="flex justify-center p-3">
                                    <input id="input_anything" name="input_anything" class="dataTable-input bg-gray-200 px-3 py-2 rounded-md" value="{{ $input_anything }}" placeholder="Search..." type="text">
                                </div>

                                <div class="flex justify-center p-3">

                                    <button type class="p-2 border w-full rounded-md bg-gray-800 text-white">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="w-full mb-6 overflow-x-auto">
                        <form action="">




                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dataTable-table">
                                        <thead>
                                            <tr class="bg-gray-100">

                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-5">address</a>
                                                </th>
                                                <th class="hidden lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-2 text-xs">PromoteStart </a>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-2 text-xs">PromoteExpired</p>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-4">Type</p>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter ">Facbook</p>
                                                </th>
                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter ">Dhome</a>
                                                </th>
                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter ">Shoppee</a>
                                                </th>
                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter ">Google</a>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-3">Status</a>
                                                </th>
                                                @if(Auth::user()->role == 'admin')
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-5">Actions</p>
                                                </th>
                                                @endif

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($realEstates as $realEstate)
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <div class="flex flex-wrap flex-row items-center m-3 text-xs ">

                                                            <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1 text-center">
                                                                {{ $realEstate->address}}

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">{{ $realEstate->advertisements()->get()->first()->ad_start}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">{{ $realEstate->advertisements()->get()->first()->ad_expired}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">{{ $realEstate->type}}
                                                </td>
                                                @if($realEstate->advertisements()->where('name', 'facbook')->get()->first()->URL)
                                                <td class="flex text-center hidden lg:table-cell hover:bg-slate-400">
                                                    <a class="flex justify-center" href="{{$realEstate->advertisements()->where('name', 'facbook')->get()->first()->URL}}">
                                                        <svg class="flex justify-items-center  h-10" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="facebook">
                                                            <path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"></path>
                                                        </svg>
                                                    </a>
                                                </td>
                                                @else
                                                <td></td>
                                                @endif
                                                @if($realEstate->advertisements()->where('name', 'dehome')->get()->first()->URL)
                                                <td class="text-center flex justify-items-center hidden text-xs lg:table-cell hover:bg-slate-400">
                                                    <a class="flex justify-center" href="{{$realEstate->advertisements()->where('name', 'dehome')->get()->first()->URL}}">
                                                        <img class="flex justify-items-center h-10" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ27BUjJGXzKErsvocC013FvXZ1tHyVe1qNl7OjLzk&s" alt="">
                                                    </a>
                                                </td>
                                                @else
                                                <td></td>
                                                @endif
                                                @if($realEstate->advertisements()->where('name', 'shopee')->get()->first()->URL)
                                                <td class="text-center flex justify-items-center hidden text-xs lg:table-cell hover:bg-slate-400">
                                                    <a class="flex justify-center" href="{{$realEstate->advertisements()->where('name', 'shopee')->get()->first()->URL}}">
                                                        <img class="flex justify-items-center h-10" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/473722ef-b6b9-4c8c-b3ea-24bba35b6504/dcpq84b-2927887e-e427-485f-995a-0cf7f2a36bef.png/v1/fill/w_400,h_400/fastwork_logo_by_fastworkid_dcpq84b-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NDAwIiwicGF0aCI6IlwvZlwvNDczNzIyZWYtYjZiOS00YzhjLWIzZWEtMjRiYmEzNWI2NTA0XC9kY3BxODRiLTI5Mjc4ODdlLWU0MjctNDg1Zi05OTVhLTBjZjdmMmEzNmJlZi5wbmciLCJ3aWR0aCI6Ijw9NDAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.YXuHjiRMeE47DtKG7YkjBF7-I_syG-ETyRLWD8TzB2g" alt="">

                                                    </a>
                                                </td>
                                                @else
                                                <td></td>
                                                @endif
                                                @if($realEstate->advertisements()->where('name', 'google')->get()->first()->URL)
                                                <td class="text-center flex justify-items-center hidden lg:table-cell hover:bg-slate-400">
                                                    <a class="flex justify-center" href="{{$realEstate->advertisements()->where('name', 'google')->get()->first()->URL}}">
                                                        <svg class="flex justify-items-center h-10" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="google">
                                                            <path d="M22.60229,10.00391a1.00005,1.00005,0,0,0-.98388-.82227H12.2a.99974.99974,0,0,0-1,1V14.0498a.99974.99974,0,0,0,1,1h3.9624a3.65162,3.65162,0,0,1-1.13183,1.1875A5.0604,5.0604,0,0,1,12.2,17.02246a4.93525,4.93525,0,0,1-4.64624-3.4378L7.55347,13.583a4.90382,4.90382,0,0,1,0-3.167l.00024-.00165A4.9356,4.9356,0,0,1,12.2,6.97754,4.37756,4.37756,0,0,1,15.3313,8.19531a1.00053,1.00053,0,0,0,1.39844-.01562L19.5979,5.31152a.99918.99918,0,0,0-.02539-1.43847A10.62342,10.62342,0,0,0,12.2,1,10.949,10.949,0,0,0,2.37134,7.05878l-.00147.00177A10.92175,10.92175,0,0,0,1.2,12a11.07862,11.07862,0,0,0,1.16992,4.93945l.00147.00177A10.949,10.949,0,0,0,12.2,23a10.5255,10.5255,0,0,0,7.29468-2.687l.00073-.00049.00079-.00085.00019-.00013.00006-.00012a10.78575,10.78575,0,0,0,3.30365-8.08386A12.51533,12.51533,0,0,0,22.60229,10.00391ZM12.2,3a8.68219,8.68219,0,0,1,5.2085,1.67285L15.95483,6.126A6.46322,6.46322,0,0,0,12.2,4.97754,6.88648,6.88648,0,0,0,6.21069,8.52832L5.14148,7.69958l-.585-.45367A8.95257,8.95257,0,0,1,12.2,3ZM3.67944,14.90332a9.02957,9.02957,0,0,1,0-5.80664l1.78223,1.38184a6.85381,6.85381,0,0,0,0,3.042ZM12.2,21A8.9528,8.9528,0,0,1,4.5564,16.75391l.37841-.29352,1.27588-.98969A6.88482,6.88482,0,0,0,12.2,19.02246a7.27662,7.27662,0,0,0,3.30573-.75079L17.19739,19.585A8.88989,8.88989,0,0,1,12.2,21Zm6.52588-2.76074-.183-.142L17.16553,17.028a5.60626,5.60626,0,0,0,1.39966-2.79553.9998.9998,0,0,0-.9834-1.18262H13.2V11.18164h7.54883c.03418.3457.05127.69531.05127,1.0459A9.05156,9.05156,0,0,1,18.72583,18.23926Z"></path>
                                                        </svg>

                                                    </a>
                                                </td>
                                                @else
                                                <td></td>
                                                @endif
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    @if($realEstate->advertisements()->get()->pluck('status')->contains('unsuccess'))
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-rose-700 bg-rose-100 rounded-full w-full">unsuccess</span>
                                                    @else
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full w-full">success</span>
                                                    @endif
                                                </td>
                                                @if(Auth::user()->role == 'admin')
                                                <td class="text-center">
                                                    
                                                    <a href="{{ route('admin.promoteList.edit', ['realEstate' => $realEstate]) }}" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                            </path>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                    <div class="grid grid-cols-6 -space-x-px h-10 text-base m-5">
                                        <div></div>
                                        <div></div>
                                        <div class="flex items-center col-span-3">
                                            {{ $realEstates->appends([
                                                    'input_anything' => $input_anything,
                                                    'input_id_user' => $input_id_user,
                                                ])->links() }}
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection