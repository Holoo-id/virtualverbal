@extends('back.layouts.base')
@section('content')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Blog Layout
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <div class="flex flex-col sm:flex-row items-center">
                <div class="sm:mt-2 mr-2">
                    <select data-hide-search="true" class="select2 w-full input">
                        <option value="" selected disabled hidden>Sort</option>
                        <option value="1">Alphabet (ASC)</option>
                        <option value="2">Alphabet (DESC)</option>
                        <option value="3">Time (ASC)</option>
                        <option value="4">Time (DESC)</option>
                    </select>
                </div>
                <div class="sm:mt-2 mr-2">
                    <select class="select2 w-full input" multiple>
                        <option value="" selected disabled hidden>Penulis</option>
                        <option value="1">Josh</option>
                        <option value="2">Abraham</option>
                        <option value="3">James</option>
                    </select>
                </div>
                <div class="sm:mt-2 mr-2">
                    <select data-hide-search="true" class="select2 w-full input">
                        <option value="" selected disabled hidden>Format</option>
                        <option value="1">Semua</option>
                        <option value="2">Artikel</option>
                        <option value="3">Berita</option>
                    </select>
                </div>
                <div class="sm:mt-2 mr-2">
                    <select data-hide-search="true" class="select2 w-full input">
                        <option value="" selected disabled hidden>Status</option>
                        <option value="1">Belum Publish</option>
                        <option value="2">Diedit</option>
                        <option value="3">Belum Edit</option>
                    </select>
                </div>
                <div class="sm:mt-2 mr-2">
                    <input type="text" class="input w-full border" placeholder="Seacrh">
                </div>
            </div>
            <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Post</button>
            <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="eye" class="w-4 h-4 mr-2"></i> Preview Post </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-8.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Leonardo DiCaprio</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Photography</a> <span class="mx-1">•</span> 14 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-9.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-4.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Tom Cruise</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 42 minutes ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-9.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a> 
                <div class="text-gray-700 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-14.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Denzel Washington</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Smartphone &amp; Tablet</a> <span class="mx-1">•</span> 19 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-14.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Popularised in the 1960s with the release of Letraset</a> 
                <div class="text-gray-700 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-4.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Robert De Niro</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Photography</a> <span class="mx-1">•</span> 18 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-5.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a> 
                <div class="text-gray-700 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-9.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Arnold Schwarzenegger</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Photography</a> <span class="mx-1">•</span> 54 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-9.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a> 
                <div class="text-gray-700 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-10.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Johnny Depp</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 56 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-4.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Popularised in the 1960s with the release of Letraset</a> 
                <div class="text-gray-700 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-1.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Keanu Reeves</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 31 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-12.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of model sentences</a> 
                <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-5.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Leonardo DiCaprio</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Electronic</a> <span class="mx-1">•</span> 21 minutes ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-11.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Popularised in the 1960s with the release of Letraset</a> 
                <div class="text-gray-700 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-4.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Denzel Washington</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">Smartphone &amp; Tablet</a> <span class="mx-1">•</span> 46 minutes ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-7.jpg') }}">
                </div>
                <a href="" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a> 
                <div class="text-gray-700 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish"> <i data-feather="share" class="w-3 h-3"></i> </a>
            </div>
        </div>
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li> <a class="pagination__link" href="">1</a> </li>
                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                <li> <a class="pagination__link" href="">3</a> </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                </li>
            </ul>
            <select class="w-20 input box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
@endsection