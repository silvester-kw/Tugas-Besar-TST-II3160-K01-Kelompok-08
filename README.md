# Sistem Takutku.com

## Prerequisites

- PHP
- Composer

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

### 4. In Xampp, start Apache and MySQL

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
