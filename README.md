# Laravel Starter Kit

A robust and feature-rich Laravel starter kit built with modern technologies and best practices. This starter kit provides a solid foundation for building web applications with authentication, authorization, and team management capabilities.

## Features

- **Authentication System** - Powered by Laravel Jetstream
- **Team Management** - Built-in team collaboration features
- **Role-Based Access Control** - Using Spatie Laravel Permission
- **Modern Frontend** - Using Livewire and TailwindCSS
- **API Support** - Built-in API authentication using Laravel Sanctum

## Tech Stack

### Backend
- PHP 8.2+
- Laravel 11.x
- Laravel Jetstream 5.3
- Spatie Laravel Permission 6.10
- Laravel Sanctum 4.0
- Maatwebsite Excel 3.1

### Frontend
- Livewire 3.0
- TailwindCSS
- Tailwind Forms
- Tailwind Typography

### Development Tools
- Laravel Pail
- Laravel Pint
- Laravel Sail
- Vite 6.0

## Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (MySQL/MariaDB)

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd laravel-starter-kit
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations and seeders
```bash
php artisan migrate --seed
```

## User Roles and Permissions

The starter kit comes with predefined roles and permissions:

### Roles
- Admin
- Editor
- User
- Viewer

### Permissions
- manage_users
- manage_roles
- manage_permissions
- view_reports
- manage_settings
- edit_content
- delete_content
- publish_content
- view_content
- view_own_profile
- edit_own_profile
- create_content
- comment
- like_content

## Development

Start the development server:

```bash
php artisan serve
```

Watch for frontend changes:

```bash
npm run dev
```

## Testing

Run PHPUnit tests:

```bash
php artisan test
```

## License

This Laravel Starter Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).