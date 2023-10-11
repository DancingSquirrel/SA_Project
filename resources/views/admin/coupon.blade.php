<template>
     <div class="animate-fade-down mx-full w-full p-2">
      <div class="flex-shrink max-w-full px-4 w-[500px]">   
					    <p class="text-3xl font-poppin mt-3 mb-5">Coupon Code</p>
					  </div>    
     
  <div class="flex flex-wrap flex-col">
    
            
    <div class="m-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg ">
      
                <div class="flex flex-wrap flex-row mx-4">
                  <div class="flex-shrink max-w-full px-4 w-full">
                    <div class="md:flex md:justify-between">
                      <div>
                        <a href="#" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                        </svg></a>
                      </div>

                      <div>
                        <div id="bulk-actions">
                          <label class="flex flex-wrap flex-row">
                            <select id="bulk_actions" name="bulk_actions" class="inline-block leading-5 relative py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mb-3 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                              <option>Action</option>
                              <option value="activate">In stock</option>
                              <option value="deactivate">Deactivate</option>
                              <option value="out">Out stock</option>
                              <option value="delete">Delete</option>
                            </select>        
                            <input type="submit" id="bulk_apply" class="ltr:ml-2 rtl:mr-2 py-2 px-4 inline-block text-center mb-3 rounded leading-5 border hover:bg-gray-300 dark:bg-gray-900 dark:bg-opacity-40 dark:border-gray-800 dark:hover:bg-gray-900 focus:outline-none focus:ring-0 cursor-pointer" value="Apply">
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="w-full mb-6 overflow-x-auto">
                      <form action="">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top flex flex-row justify-between m-5"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dark:text-gray-400 dataTable-table">
                          <thead>
                            <tr class="bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40"><th data-sortable="false" >
                              <input id="check_all" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700">
                            </th>
                            <th class="text-center" data-sortable="" >
                              <a href="#" class="text-center dataTable-sorter">CodeName</a>
                            </th>
                            <th class="text-center hidden lg:table-cell" data-sortable="" >
                              <a href="#" class="text-center dataTable-sorter mx-5">CodeID</a>
                            </th>
                            <th class="text-center" data-sortable="" >
                              <a href="#" class="text-center dataTable-sorter mx-5">DateExpire</a>
                            </th>
                            <th class="text-center hidden lg:table-cell" data-sortable="" >
                              <a href="#" class="text-center dataTable-sorter mx-5">DiscountType</a>
                            </th>
                            <th class="text-center hidden lg:table-cell" data-sortable="" >
                              <a href="#" class="text-center dataTable-sorter mx-5">Discount%</a>
                            </th>
                            <th class="text-center" data-sortable="false">
                              <p class="text-center dataTable-sorter mx-10">Actions</p></th>
                          </tr>
                          </thead>
                          <tbody><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product1.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Race Running Shoe
                                      <div class="pt-1 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">27/05/2022</td><td class="text-center"><span class="line-through mr-2">$97</span><span class="text-green-500">79$</span></td><td class="text-center hidden lg:table-cell">1256</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product2.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Womens Free RN Flyknit 2018
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">20/05/2022</td><td class="text-center">$87</td><td class="text-center hidden lg:table-cell">568</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product3.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Sneaker Running Shoes
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">18/05/2022</td><td class="text-center">$77</td><td class="text-center hidden lg:table-cell">999</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product4.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Air Zoom Pegasus 36 Running Shoes
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">18/05/2022</td><td class="text-center">$97</td><td class="text-center hidden lg:table-cell">0</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full">Not active</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product5.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Air Max 270 Running Shoe
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">18/05/2022</td><td class="text-center">$97</td><td class="text-center hidden lg:table-cell">56</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product6.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Flex Trainer 9 Sneaker
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">18/05/2022</td><td class="text-center">$97</td><td class="text-center hidden lg:table-cell">0</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-pink-700 bg-pink-100 rounded-full">Out stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product7.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Gymnastics Tennis Shoes
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">18/05/2022</td><td class="text-center">$97</td><td class="text-center hidden lg:table-cell">56</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product1.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                    Nike Women's Court Lite 2 Tennis Shoe
                                    <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">17/05/2022</td><td class="text-center"><span class="line-through mr-2">$97</span><span class="text-green-500">79$</span></td><td class="text-center hidden lg:table-cell">6</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Low stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product2.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Women's Low-Top Basketball Shoe
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">10/05/2022</td><td class="text-center">$87</td><td class="text-center hidden lg:table-cell">56</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr><tr><td><input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-700"></td><td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8" src="../src/img/products/product3.jpg"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ltr:ml-2 rtl:mr-2 mb-1">  
                                      Nike Reposto Womens Running Casual Shoe Cz5630-002
                                      <div class="pt-3 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td><td class="hidden lg:table-cell">08/05/2022</td><td class="text-center">$97</td><td class="text-center hidden lg:table-cell">56</td><td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td><td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td></tr></tbody>
                        </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 14 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
                        
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>

</template>

<script setup lang="ts">
definePageMeta({
  layout: "admin-layout",
});

</script>