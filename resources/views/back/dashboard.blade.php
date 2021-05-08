@extends('back.layouts.base')
@section('content')
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Avatar for {{ Auth::user()->name }}" class="rounded-full" src="{{ asset(Auth::user()->image) }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->name }}</div>
                    <div class="text-gray-600">{{ Auth::user()->role->name }}</div>
                </div>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                {{--<div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram Robert De Niro </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter Robert De Niro </div>--}}
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-full py-3">
                    <div class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit quo sint nobis architecto, molestiae praesentium quaerat beatae voluptatibus expedita, eveniet sequi excepturi voluptates? Blanditiis, eos unde ut qui ad tempora!</div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="book" class="report-box__icon text-theme-4"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ $creates->count() }}</div>
                                <div class="text-base text-gray-600 mt-1">Content</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="book-open" class="report-box__icon text-theme-6"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ $publishes->count() }}</div>
                                <div class="text-base text-gray-600 mt-1">Di-publish</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="archive" class="report-box__icon text-theme-9"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ $unpublishes->count() }}</div>
                                <div class="text-base text-gray-600 mt-1">Belum diedit</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Comments -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Latest Comments
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="intro-y box mt-5 pb-10 px-8">
                    <div class="pt-5">
                        <div class="flex">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-3.jpg') }}">
                            </div>
                            <div class="ml-3 flex-1">
                                <div class="flex items-center"> <a href="" class="font-medium">Leonardo DiCaprio</a> <a href="" class="ml-auto text-xs text-gray-600">Reply</a> </div>
                                <div class="text-gray-600 text-xs sm:text-sm">47 minutes ago</div>
                                <div class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 pt-5 border-t border-gray-200">
                        <div class="flex">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-10.jpg') }}">
                            </div>
                            <div class="ml-3 flex-1">
                                <div class="flex items-center"> <a href="" class="font-medium">Bruce Willis</a> <a href="" class="ml-auto text-xs text-gray-600">Reply</a> </div>
                                <div class="text-gray-600 text-xs sm:text-sm">31 seconds ago</div>
                                <div class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 pt-5 border-t border-gray-200">
                        <div class="flex">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-1.jpg') }}">
                            </div>
                            <div class="ml-3 flex-1">
                                <div class="flex items-center"> <a href="" class="font-medium">Bruce Willis</a> <a href="" class="ml-auto text-xs text-gray-600">Reply</a> </div>
                                <div class="text-gray-600 text-xs sm:text-sm">31 seconds ago</div>
                                <div class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Comments -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Content Terbanyak Dilihat
                    </h2>
                </div>
                <div class="mt-5">
                    @foreach($top_views as $top)
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                    <img alt="{{ $top->image_name }}" src="{{ !empty($top->image_path) ? asset($top->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg') }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">{{ $top->judul }}</div>
                                    <div class="text-gray-600 text-xs">{{ $top->publish_at }}</div>
                                </div>
                                <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">{{ $top->views }} Dibaca</div>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('content-list') }}" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 text-theme-16">View More</a> 
                </div>
            </div>
            <!-- END: Weekly Best Sellers -->
        </div>
    </div>
@endsection