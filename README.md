# Sistem Takutku.com

## Penjelasan sistem

Sistem Reservasi Takut.com merupakan sistem pemesanan tiket online yang dapat diakses oleh para admin staff Takut.com sesuai dengan username dan password yang tersedia. Sistem ini menawarkan fitur pemesanan tiket untuk wahana Dududu world dan akan mencatat setiap data reservasi dan data pengunjung untuk disimpan dalam bentuk **chart domisili pengunjung terbanya**. Sistem ini juga akan menyediakan tampilan chart **Chart Wahana Terfavorit** untuk memberikan rekomendasi kepada pengunjung wahana apa yang paling menarik untuk dimainkan.

## Prerequisites

- PHP
- Composer
- XAMPP

## Cara menjalankan sistem

 1. Clone repository berikut dengan link berikut ini
    ```sh
    git clone (https://github.com/victoria-angelique/Tugas-Besar-TST-II3160---K01--Kelompok-08.git)
    ```
2. Pastikan **xampp** atau **manager osx** sudah berjalan dan terlampir gambar seperti berikut
   <img width="673" alt="Screenshot 2023-12-18 at 20 27 33" src="https://github.com/victoria-angelique/Tugas-Besar-TST-II3160---K01--Kelompok-08/assets/91114869/65be6ac8-9e93-4538-a8e1-1b4fc83ac20b">

3. Buka link **php myadmin** http://localhost/phpmyadmin/ dengan web browser, kemudian buatlah database baru dengan nama **reservasi** dengan click new sehingga terbuat database seperti berikut
   <img width="1105" alt="Screenshot 2023-12-18 at 20 32 26" src="https://github.com/victoria-angelique/Tugas-Besar-TST-II3160---K01--Kelompok-08/assets/91114869/58e43150-7483-482f-8d1f-019de510307f">

4. Selanjutnya, fetch data dengan command berikut untuk memasukkan data seeder ke dalam database di php my admin tadi
   ```sh
   php spark migrate:refresh
   ```
   ```sh
   php spark db:seed AllSeeder
   ```
5. Jalankan command berikut untuk menjalankan sistem di link localhost kalian menggunakan link berikut (http://localhost:8081/)
   ```sh
   php spark serve
   ```
6. Selamat kalian berhasil masuk ke dalam sistem reservasi apabila di layar kalian sudah tertampil interface berikut 
