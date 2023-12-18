# Sistem Takutku.com

## Penjelasan sistem

Sistem Reservasi Takut.com merupakan sistem pemesanan tiket online yang dapat diakses oleh para admin staff Takut.com sesuai dengan username dan password yang tersedia. Sistem ini menawarkan fitur pemesanan tiket untuk wahana Dududu world dan akan mencatat setiap data reservasi dan data pengunjung untuk disimpan dalam bentuk **chart domisili pengunjung terbanya**. Sistem ini juga akan menyediakan tampilan chart **Chart Wahana Terfavorit** untuk memberikan rekomendasi kepada pengunjung wahana apa yang paling menarik untuk dimainkan.

## Prerequisites

- PHP
- Composer
- XAMPP

## How to Run it Locally

### 1. git clone to your local folder
```bash
git clone 
```

### 2. cd to cloned repo

### 3. Install composer
```bash
compser install
```

### 3. Run Xampp

### 4. Inside Xampp, start Apache and MySQL

### 5. Go to https://localhost/phpmyadmin/

### 6. Make new database named "reservasi"

### 7. Open the cloned repository

### 8. Run migration
```bash
php spark migrate:refresh
```

### 9. Seed the database
```bash
php spark db:seed AllSeeder
```

### 10. Run the application
```bash
php spark serve
```

### Open http://localhost:8081/
