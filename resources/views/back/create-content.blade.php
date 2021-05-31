@extends('back.layouts.base')
@section('content')

    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- <div class="intro-y box col-span-12 lg:col-span-4 p-10">
            <div class="intro-y text-justify leading-relaxed">
                <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
        </div> -->
        <div class="intro-y col-span-12 lg:col-span">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Buat Konten
                    </h2>
                </div>
                <div class="p-10" id="basic-datepicker">
                    <div class="preview">
                        <form data-single="true" data-file-types="image/jpeg|image/png|image/jpg" action="{{ route('add-content')}}" enctype="multipart/form-data" method="post" class="validate-form">
                            @csrf
                            <div>
                                <label class="flex flex-col sm:flex-row"> Judul <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="in_judul" class="input w-full border mt-2" placeholder="Judul Kontenmu" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Sub Judul <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="in_sub_judul" class="input w-full border mt-2" placeholder="Tentang Kontenmu" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row mb-2"> Permalink <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <div class="grid grid-cols-12 gap-2">
                                    <input type="url" name="permalink" class="input border col-md-5 col-span-3 cursor-not-allowed" placeholder="virtualverbal.com/content/detail/" disabled>
                                    <input name="in_permalink" class="input border col-md-5 col-span-9" placeholder="link-yang-anda-masukan">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Format Konten <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <select class="input w-full border mt-2" name="in_category_id" id="in_category_id">
                                    <option>Category</option>
                                    @foreach($categories as $ct)
                                        <option value=" {{ $ct->id }}" >{{ $ct->name }}</option>
                                    @endforeach
                                </select>     
                            </div>
                            <div class="mt-3">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-8">
                                        <label class="flex flex-col sm:flex-row"> Topik <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                        <div class="mt-2">
                                            <select data-placeholder="Topik kontenmu" class="tail-select w-full" data-search="true" name="in_tags[]" multiple >
                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <label class="flex flex-col sm:flex-row"><span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Topik yang dicari tidak ada? Tambahkan di sini</span> </label>
                                        <div class="mt-4">
                                            <!-- <button type="button" data-toggle="modal" data-target="#basic-modal-preview" class="button bg-theme-1 text-white col-span-2">Tambah</button> -->
                                            <a href="javascript:;" data-toggle="modal" data-target="#form-tambah-tag" class="button bg-theme-1 text-white col-span-2" id="tambah-tag">Tambah</a>
                                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#basic-modal-preview" class="button bg-theme-1 text-white col-span-2">Tambah</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row mb-2"> Konten </label>
                                <textarea id="editor" class="editor" name="in_konten"></textarea>
                            </div>
                            <div class="mt-3">
                                <label class="mb-2 flex flex-col sm:flex-row"> Feature Image </label>
                                <input class="dropzone border-gray-200 border-dashed dz-clickable" style="width: 100%" name="in_file" type="file" />
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Image Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="in_img_title" class="input w-full border mt-2" placeholder="Image Name" >
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Game Database <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Hanya jika anda memilih kategori game</span> </label>
                                <div class="mt-2">
                                    <select data-placeholder="Pilih Game dari IGDB" class="tail-select w-full" name="in_igdb_id" id="in_igdb_id" data-search="true">
                                        <option value="0">None</option>
                                        @foreach($games as $game)
                                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--<div class="mt-3">
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
    <div class="modal" id="form-tambah-tag" role="dialog" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 53;">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    Tambahkan Topik Baru
                </h2>
            </div>
            <form action="{{route('add-tag')}}" method="POST">
                @csrf
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <div class="col-span-12 sm:col-span">
                        <label>Topik Baru</label>
                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Topik konten baru" id="in_tag_name" name="in_tag_name">
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200 dark:border-dark-5">
                    <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 dark:border-dark-5 dark:text-gray-300 mr-1" id="batal-tambah-tag">Batal</button>
                    <input type="submit" class="button w-20 bg-theme-1 text-white" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#tambah-tag").click(function(){
                $("#form-tambah-tag").addClass("show");
            });
            $("#batal-tambah-tag").click(function(){
                $("#form-tambah-tag").removeClass("show");
            });
        });
        
    </script>
@endsection

