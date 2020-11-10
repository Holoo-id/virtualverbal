@extends('back.layouts.base')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Profile Layout
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        @include('back.profile.menu')
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex flex-col lg:flex-row border-b border-gray-200 p-5 -mx-5">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-14.jpg') }}">
                        </div>
                        <div class="ml-5 w-full">
                            <div class="flex">
                                <div class="text-gray-700 mr-auto">Next Level</div>
                                <div class="font-medium">10%</div>
                            </div>
                            <div class="w-full h-1 mt-2 bg-gray-400 rounded-full">
                                <div style="width:10%" class="h-full bg-theme-1 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> robertdeniro@left4code.com </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram Robert De Niro </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter Robert De Niro </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center px-5 py-3 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Analitics
                    </h2>
                    <div class="dropdown relative ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                        <button class="dropdown-toggle button font-normal border text-white relative items-center text-gray-700 hidden sm:flex"> Export <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                        <div class="dropdown-box mt-5 sm:mt-12 absolute w-40 top-0 right-0 z-20">
                            <div class="dropdown-box__content box">
                                <div class="px-4 py-2 border-b border-gray-200 font-medium">Export Tools</div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="printer" class="w-4 h-4 text-gray-700 mr-2"></i> Print </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="external-link" class="w-4 h-4 text-gray-700 mr-2"></i> Excel </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-text" class="w-4 h-4 text-gray-700 mr-2"></i> CSV </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="archive" class="w-4 h-4 text-gray-700 mr-2"></i> PDF </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="flex flex-wrap sm:flex-no-wrap mr-auto">
                            <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                <span>Post Dibaca</span> 
                            </div>
                            <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                <span>Product Profit</span> 
                            </div>
                        </div>
                        <div class="dropdown relative mt-3 sm:mt-0 mr-auto sm:mr-0">
                            <button class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700"> Sortir berdasarkan <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2 overflow-y-auto h-32">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Tahun</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Bulan</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Minggu</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Hari</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="report-chart mt-8">
                        <canvas id="report-line-chart" height="130"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection