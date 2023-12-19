# Sistem Takutku.com

## Penjelasan sistem

Sistem Reservasi Takut.com merupakan sistem pemesanan tiket online yang dapat diakses oleh para admin staff Takut.com sesuai dengan username dan password yang tersedia. Sistem ini menawarkan fitur pemesanan tiket untuk wahana Dududu world dan akan mencatat setiap data reservasi dan data pengunjung untuk disimpan dalam bentuk **chart domisili pengunjung terbanyak**. Sistem ini juga akan menyediakan tampilan chart **Chart Wahana Terfavorit** untuk memberikan rekomendasi kepada pengunjung wahana apa yang paling menarik untuk dimainkan.

## Prerequisites

- PHP
- Composer
- XAMPP

## Cara menjalankan sistem

 1. Clone repository berikut dengan link berikut ini
    ```sh
    git clone (https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08.git)
    ```
2. Pastikan **xampp** atau **manager osx** sudah berjalan dan terlampir gambar seperti berikut
   ![image](https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08/assets/88710185/8f33560f-28c9-44e7-9362-e67bcfed55d8)

3. Buka link **php myadmin** http://localhost/phpmyadmin/ dengan web browser, kemudian buatlah database baru dengan nama **reservasi** dengan click new sehingga terbuat database seperti berikut
   ![image](https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08/assets/88710185/8d967d19-72bf-401f-b447-5cff4cc6a41d)

4. Cek .env untuk memastikan apakah env sedang terhubung untuk localhost atau Docker. Pastikan membaca petunjuk pada .env. Comment .env yang tidak diinginkan dan Uncomment yang dibutuhkan.
5. Selanjutnya, fetch data dengan command berikut untuk memasukkan data seeder ke dalam database di php my admin tadi
   ```sh
   php spark migrate:refresh
   ```
   ```sh
   php spark db:seed AllSeeder
   ```
7. Jalankan command berikut untuk menjalankan sistem di link localhost kalian menggunakan link berikut (http://localhost:8081/)
   ```sh
   php spark serve
   ```
8. Selamat kalian berhasil masuk ke dalam sistem reservasi apabila di layar kalian sudah tertampil interface login
   ![image](https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08/assets/88710185/f5339c1f-f0e4-4798-8c79-023b9c9342dc)


### Cara menjalankan sistem dengan deployment docker

 1. Clone repository berikut dengan link berikut ini
    ```sh
    git clone (https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08.git)
    ```
2. Buka command terminal anda dan tuliskan command berikut
   ```sh
   make setup
   ```
   Apabila make setup anda belum berjalan bisa melakukan instalasi GNU terlebih dahulu dengan panduan link berikut (https://leangaurav.medium.com/how-to-setup-install-gnu-make-on-windows-324480f1da69)
5. Jalankan command berikutnya untuk menjalankan sistem 
   ```sh
   make migrate
   ```
   ```sh
   make run
   ```
6. Selamat, anda bisa menjalankan sistem kami di link (http://localhost:8081/) dan apabila kalian berhasil masuk ke dalam sistem wahana apabila di layar kalian sudah tertampil interface login
![image](https://github.com/silvester-kw/Tugas-Besar-TST-II3160-K01-Kelompok-08/assets/88710185/ecb881a7-749b-41ac-a6b6-b565c127c0b4)
