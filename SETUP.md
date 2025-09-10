# A&B Carpet Laravel Application - Setup Guide (Laravel 11)

## Prerequisites (Laravel 11)
- **PHP 8.2 or higher** (required for Laravel 11)
- **Composer 2.x** (PHP package manager)
- **MySQL 5.7+ or MariaDB 10.3+**
- **Node.js & npm** (optional, for asset compilation)
- **XAMPP** (for local development, includes Apache, MySQL, PHP)

## Setup Instructions

### 1. Database Setup ✅
- Database Name: `aandbcarpet_com`
- Username: `root`
- Password: (empty)
- All tables and data are pre-populated (see below for structure)

### 2. Environment Configuration (.env)
- Copy `.env.example` to `.env` if not present:
  ```bash
  cp .env.example .env
  ```
- Set the following in `.env`:
  ```env
  APP_ENV=local
  APP_DEBUG=true
  DB_DATABASE=aandbcarpet_com
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- Generate application key (if not set):
  ```bash
  php artisan key:generate
  ```

### 3. Install Dependencies
- Install PHP dependencies:
  ```bash
  composer install
  ```
- (Optional) Install Node.js dependencies and compile assets:
  ```bash
  npm install && npm run dev
  ```

### 4. Database Structure
- See previous sections for full table list and row counts.

### 5. Running the Application

#### Option 1: Laravel Development Server (Recommended)
```bash
php artisan serve --host=localhost --port=8000
```
Visit: http://localhost:8000

#### Option 2: XAMPP Apache
- Place the project in `C:/xampp/htdocs/aandbcarpet`
- Visit: http://localhost/aandbcarpet/

### 6. Running on a Live Server
#### Shared Hosting
- Upload all files to your hosting root (e.g., `public_html/aandbcarpet`)
- Point your domain/subdomain to the `public/` directory
- Set up `.env` for production (set `APP_ENV=production`, `APP_DEBUG=false`)
- Run:
  ```bash
  composer install --optimize-autoloader --no-dev
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  ```
- Ensure `storage/` and `bootstrap/cache/` are writable

#### VPS/Cloud (Ubuntu example)
- Clone the repo and set up `.env` as above
- Install PHP 8.2+, Composer, MySQL
- Set up a web server (Nginx/Apache) to point to `public/`
- Run all cache and optimization commands as above

### 7. Admin Access
- Admin panel: http://localhost:8000/admin
- Uses default Laravel authentication

### 8. Key Features
- Homepage, Blog, Offers, Service Areas, Contact Forms, Admin Panel
- All features and data preserved from previous versions

### 9. Troubleshooting
- **Database errors:** Ensure MySQL is running and credentials are correct
- **Cache issues:** Run `php artisan cache:clear`, `php artisan config:clear`, `php artisan view:clear`, `php artisan route:clear`
- **File upload issues:** Ensure `storage/` and `bootstrap/cache/` are writable
- **Composer errors:** Ensure you are using Composer 2.x and PHP 8.2+

### 10. Laravel 11 Notes
- **No usage of LaravelCollective HTML/Form**: All forms use native HTML or Blade
- **No usage of nunomaduro/collision**: Error handling is managed by Spatie Ignition
- **All dependencies are Laravel 11 compatible**
- **No breaking changes in codebase**

## Application Overview
This is a Laravel 11 application for A&B Carpet, a carpet cleaning service company serving Brooklyn and Manhattan, NY. The application includes content management, blog system, offers management, and customer contact features. Your existing database contains a wealth of real data and is ready to use. 