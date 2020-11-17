# virtualverbal
## Setup ( WAJIB )
#### Database
  1. Buat Database baru di Mysql local dengan nama database **viverb** dan biarkan kosong sementara
  2. run command ` php artisan migrate `
  3. run command ` php artisan db:seed `
  4. Jika ada update baru dalam database, sebaiknya setelah pull run command ` php artisan migrate:rollback `, lalu ulangi step 2 sampai 3 kembali
  5. Apabila nomor 4 gagal, drop database secara manual lewat laman localhost/phpmyadmin ataupun lewat mysql command ` drop database viverb `
#### Others
  1. Untuk memudahkan pengaturan penyimpanan file serta pemanggilannya, harap run command ` php artisan storage:link ` sehingga semua file dalam folder **storage/** bisa dipanggil menggunakan code  ` asset(...) ` dalam laravel
