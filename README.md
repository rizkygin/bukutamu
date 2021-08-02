Tahap solved 

> Xampp(php 5) dimatikan 
> uninstall composer 
> xampp 7 dihidupkan 
> install composer 
> arahkan composer ke php 7  
> cek versi PHP global 
> jalankan perintah "composer create-project laravel/laravel bukutamu"


Tahap pembuatan model

> php artisan make:model nama_model --migration
 >> note: nama_model = tamu
> edit model dan migration sesuai kebutuhan
> php artisan migrate:fresh


cloning project

> git clone https://github.com/rizkygin/bukutamu.git
> pada command prompt ketik "cp .env.example .env"
> jalankan perintah cmd "composer install"
> jalankan perintah "php artisan key:generate"
> sesuaikan file .env dengan database
> jalankan "php artisan migrate:fresh"
> jalankan perintah "php artisan db:seed tamu_seeder"
> jalankan perintah "php artisan db:seed instansi_seeder"
 >lalu jalankan laravel "php artisan serve"