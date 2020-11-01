@extends('back.layouts.base')
@section('content')
    <div class="intro-y news p-5 box mt-8">
        <!-- BEGIN: Blog Layout -->
        <h2 class="intro-y font-medium text-xl sm:text-2xl">
            Desktop publishing software like Aldus PageMaker
        </h2>
        <div class="intro-y text-gray-700 mt-3 text-xs sm:text-sm"> 13 June 2022 <span class="mx-1">•</span> <a class="text-theme-1" href="">Photography</a> <span class="mx-1">•</span> 7 Min read </div>
        <div class="intro-y mt-6">
            <div class="news__preview image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="{{ asset('/backend/dist/images/preview-11.jpg') }}">
            </div>
        </div>
        <div class="intro-y flex relative pt-16 sm:pt-6 items-center pb-6">
            <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-gray-700 text-xs sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3"> Comments: <span class="font-medium">42</span> </div>
                <div class="intro-x mr-1 sm:mr-3"> Views: <span class="font-medium">88k</span> </div>
                <div class="intro-x sm:mr-3 ml-auto"> Likes: <span class="font-medium">204k</span> </div>
            </div>
        </div>
        <div class="intro-y text-justify leading-relaxed">
            <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        </div>
        <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-gray-200">
            <div class="flex items-center">
                <div class="w-12 h-12 flex-none image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('/backend/dist/images/profile-3.jpg') }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">Leonardo DiCaprio</a>, Author 
                    <div class="text-gray-600">Senior Frontend Engineer</div>
                </div>
            </div>
            <div class="flex items-center text-gray-700 sm:ml-auto mt-5 sm:mt-0">
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border ml-2 text-gray-500 zoom-in tooltip" title="Edit"> <i class="w-3 h-3 fill-current" data-feather="edit-3"></i> </a>
            </div>
        </div>
        <!-- END: Blog Layout -->
    </div>
@endsection