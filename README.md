# virtualverbal
## Setup ( WAJIB )
Untuk mengatasi berbagai macam error dan juga keamanan serta keringangan file project di GitHub Repository ini, maka wajib melakukan hal hal dibawah setelah melakukan clone atau pull dari project ini.
#### Instalasi
  1. Untuk mengatasi banyak error dalam share project, folder **\vendor** kedepannya akan dihapus dari GitHub Repo. Setelah melakukan cloning project run command ` composer install ` dan apabila ada error yang terjadi di dalam folder **\vendor** maka hapus folder vendor dari directory local anda, lalu run command yang sama yang sudah disebutkan.
#### Database
  1. Buat Database baru di Mysql local dengan nama database **viverb** dan biarkan kosong sementara
  2. run command ` php artisan migrate `
  3. run command ` php artisan db:seed `
  4. Jika ada update baru dalam database, sebaiknya setelah pull run command ` php artisan migrate:rollback `, lalu ulangi step 2 sampai 3 kembali
  5. Apabila nomor 4 gagal, drop database secara manual lewat laman localhost/phpmyadmin ataupun lewat mysql command ` drop database viverb `
#### Others
  1. Untuk memudahkan pengaturan penyimpanan file serta pemanggilannya, cek dalam folder **public/** apakah ada folder **storage/** . Bila ada hapus terlebih dahulu.
  2. Setelah memastikan tidak ada folder **public/storage/** , run command ` php artisan storage:link ` sehingga semua file dalam folder **storage/** bisa dipanggil menggunakan  code  ` asset(...) ` dalam laravel
  3. Dalam penggunaan Eloquent setiap model diberi nama sesuai dengan nama table dalam database serta sudah terhubung dengan table yang diperlukan, berdasasrkan yang sudah digunakan berikut daftar dan penggunaannya:
    - `Content::` = v_content
    - `FormatContent::` = v_format_content
    - `Topics::` = v_topics