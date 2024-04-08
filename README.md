# E-Presensi Project

This is a web-based e-presence system developed using Laravel for managing attendance records.

## Features
- User authentication
- Manage attendance records
- Generate reports

## Installation
1. Clone the repository: `git clone https://github.com/choerulram/E-presensi.git`
2. Navigate to the project directory: `cd E-presensi`
3. Install dependencies: `composer install`
4. Copy `.env.example` to `.env` and configure your environment variables
5. Generate application key: `php artisan key:generate`
6. Run migrations: `php artisan migrate`

## Import Database
You can import the database using the following steps:
1. Open your database management tool (e.g., phpMyAdmin)
2. Create a new database named `e-presensi`
3. Import the database dump file `e-presensi.sql` located in the root directory of the project

## Usage
1. Start the development server: `php artisan serve`
2. Open your browser and visit `http://localhost:8000`

## Default Login
You can use the following credentials to log in as an admin:
- Email: admin@gmail.com
- Password: rahasia

## License
This project is licensed under the [MIT License](LICENSE).
