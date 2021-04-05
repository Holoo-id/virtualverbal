@extends('back.layouts.base')
@section('content')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            All Content
        </h2>

        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <form class="flex flex-col sm:flex-row items-center">
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
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sm:mt-2 mr-2">
                    <select data-hide-search="true" class="select2 w-full input">
                        <option value="" selected disabled hidden>Format</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
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
                <div class="sm:mt-2 mr-2">
                    <button type="submit" class="button text-white bg-theme-1 shadow-md mr-2">Filter</a>
                </div>
            </form>
            <!-- <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="eye" class="w-4 h-4 mr-2"></i> Preview Post </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach($contents as $content)
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-3 box">
            <div class="flex items-center border-b border-gray-200 px-5 py-4">
                <div class="w-10 h-10 flex-none image-fit">
                    <img alt="{{-- $content->writer->name --}}" class="rounded-full" src="{{-- asset($content->writer->image) --}}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">{{--$content->writer->name--}}</a> 
                    <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate" href="">{{ $content->formatContent->name }}</a> <span class="mx-1">•</span> 14 seconds ago </div>
                </div>
                <div class="dropdown relative ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-500"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                    <div class="dropdown-box mt-6 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="{{ route('edit-content', ['permalink' => $content->permalink]) }}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                            <a href="{{ route('delete-content', ['permalink' => $content->permalink]) }}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="h-40 xxl:h-56 image-fit">
                    <img alt="{{ $content->image_name }}" class="rounded-md" src="{{ !empty($content->image_path) ? asset($content->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg') }}">
                </div>
                <a href="{{ route('preview', ['permalink' => $content->permalink]) }}" class="block font-medium text-base mt-5">{{ $content->judul }}</a> 
                <div class="text-gray-700 mt-2">{{ $content->sub_judul }}</div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200">
                <!-- <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip" title="Published"> <i data-feather="send" class="w-3 h-3"></i> </a> -->
                <a href="{{ route('preview', ['permalink' => $content->permalink]) }}" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip" title="Preview"> <i data-feather="eye" class="w-3 h-3"></i> </a>
                @if(Auth::user()->role_id == 7)
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Publish">
                        <i data-feather="share" class="w-3 h-3"></i>
                    </a>
                @endif
            </div>
        </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                {{ $contents->links() }}
                <!-- <li>
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
                </li> -->
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