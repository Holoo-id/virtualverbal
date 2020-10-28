@extends('back.layouts.base')
@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Implementation
                    </h2>
                </div>
                <div class="p-5" id="basic-datepicker">
                    <div class="preview">
                        <form data-single="true" data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" method="post" class="validate-form">
                            <div>
                                <label class="flex flex-col sm:flex-row"> Permalink <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Tidak untuk dirubah, URL format</span> </label>
                                <input type="url" name="url" class="input w-full border mt-2 cursor-not-allowed" value="https://google.com/judul-yang-dibuat" disabled>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Judul <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="judul" class="input w-full border mt-2" placeholder="Judul Kontenmu" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Deskripsi Singkat <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <input type="text" name="subjudul" class="input w-full border mt-2" placeholder="Tentang Kontenmu" required>
                            </div>
                            <div class="mt-3">
                                <label class="flex flex-col sm:flex-row"> Format <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Harus diisi</span> </label>
                                <div class="flex flex-col sm:flex-row mt-2">
                                    <div class="flex items-center text-gray-700 mr-2">
                                        <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                        <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Artikel</label>
                                    </div>
                                    <div class="flex items-center text-gray-700 mr-2">
                                        <input type="radio" class="input border mr-2" id="horizontal-radio-chris-evans" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                        <label class="cursor-pointer select-none" for="horizontal-radio-chris-evans">Berita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
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
                                <label class="flex flex-col sm:flex-row"> Konten </label>
                                 <textarea data-feature="all" id="summernote" class="summernote mt-2" name="editor"></textarea>
                            </div>

                            <div class="mt-3">
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
                            </div>
                            <button type="submit" class="button bg-theme-1 text-white mt-5">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>
@endsection