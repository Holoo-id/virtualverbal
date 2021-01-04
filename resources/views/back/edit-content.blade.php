@extends('back.layouts.base')
@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 lg:col-span-4 p-10">
            <div class="intro-y text-justify leading-relaxed">
                <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-8">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Buat Konten
                    </h2>
                </div>
                <div class="p-5" id="basic-datepicker">
                    <div class="preview">
                        <form data-single="true" data-file-types="image/jpeg|image/png|image/jpg" action="{{ route('update-content')}}" enctype="multipart/form-data" method="post" class="validate-form">
                            @csrf
                            <input type="hidden" name="id"  value="{{ $content->id }}">
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Judul <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="judul" class="input w-full border mt-2" placeholder="Judul Kontenmu" value="{{ $content->judul }}" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row mb-2"> Konten </label>
                                 <textarea id="summernote" class="summernote" name="konten">{{ $content->konten }}</textarea>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Sub Judul <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="sub_judul" class="input w-full border mt-2" placeholder="Tentang Kontenmu" value="{{ $content->sub_judul }}" required>
                            </div>
                            <div>
                                <label class="flex flex-col sm:flex-row"> Permalink <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Tidak untuk dirubah, URL format</span> </label>
                                <input name="" class="input border mt-2 cursor-not-allowed" value="virtualverbal.com">
                                <input type="url" name="permalink" class="input border col-md-5" value="{{ $content->permalink }}">
                            </div>

                            <div class="mt-3 dropzone border-gray-200 border-dashed">
                                <label class="flex flex-col sm:flex-row"> Feature Image </label>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Image Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="tittle" class="input w-full border mt-2" placeholder="Image Name" >
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Category <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                
                                <select class="input w-full border mt-2" name="category_id">
                                <option >Category</option>
                                @foreach($categories as $ct)
                                        <option value=" {{ $ct->id }}" >{{ $ct->name }}</option>
                                        @endforeach
                                    </select>
                                  
                            </div>

                            <!--<div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Topik <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <div class="mt-2">
                                    <select data-placeholder="Topik kontenmu" class="select2 w-full" multiple>
                                        <option value="1" selected>game</option>
                                        <option value="2">geeky</option>
                                        <option value="3" selected>movie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Game Database </label>
                                <div class="mt-2">
                                    <select data-placeholder="Pilih Game dari IGDB" class="select2 w-full">
                                        <option value="1">Crash</option>
                                        <option value="2">Resident</option>
                                        <option value="3">e-football</option>
                                        <option value="4">other</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> SEO <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="seo" class="input w-full border mt-2" placeholder="SEO" required>
                            </div>-->

                            <!-- <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, email address format</span> </label>
                                <input type="email" name="email" class="input w-full border mt-2" placeholder="example@gmail.com" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 6 characters</span> </label>
                                <input type="password" name="password" class="input w-full border mt-2" placeholder="secret" minlength="6" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, integer only & maximum 3 characters</span> </label>
                                <input type="number" name="age" class="input w-full border mt-2" placeholder="21" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span> </label>
                                <textarea class="input w-full border mt-2" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                            </div> -->
                            <button type="submit" class="button bg-theme-1 text-white mt-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>
@endsection