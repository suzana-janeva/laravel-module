# Service Provider Directory

A web application for service providers by category. Built with including eager loading, vite, tailwind CSS

##  Setup Instructions

### 1. Install dependencies

- `composer install`
- `npm install`

### 2. Setup environment
Edit the `.env` file with your database credentials:

- `DB_CONNECTION=mysql`
- `DB_DATABASE=laravel_module`
- `DB_USERNAME=username`
- `DB_PASSWORD=password`

### 3.Database setup

- `php artisan migrate`
- `php artisan db:seed`

### 4.Build assets

- `npm run dev - for development`
- `npm run build  - for production`

### 5.Testing
For testing, make sure your `.env.testing` file contains the following environment variables:

- `APP_ENV=testing`
- `DB_DATABASE=databse_test`

Run the tests using the following command: 
- `php artisan test`

## Design Decisions

- Built with **Laravel 12**
- Styling with **Tailwind CSS**
- Asset management with **Vite**
- Uses **Eloquent relationships** to associate `ServiceProvider` with `Category`

## Performance Optimizations

- **Image Optimization**: Images are lazy loaded
- **Database Queries**: Eager loading is used for the `category` relationship in the service provider index method to avoid N+1 queries
- **TTFB (Time to First Byte)**: Minimized the critical CSS and JavaScript, defer JS loading and lazy load images 
- **LCP (Largest Contentful Paint)**: Minimized critical CSS and inlined the essential CSS required for the first render

### Areas for future enhancement 
- **Pagination**: Add pagination to the service provider list when dealing with a large number of records
- **Image upload & optimization**: Implement image upload functionality with thumbnail to improve performance
- **CRUD for service providers**: Add store, update and delete methods for service providers instead of using factories
- **Category CRUD**: Add full CRUD functionality for `Category` instead of using seeders
- **Test coverage**: Implement tests for all functionalities
- **Telescope**: Enable in non-local environments if needed for broader monitoring

### Screenshots

- **List of all service providers**:
- **Service provider profile page**:
- **Telescope dashboard**:
- **Lighthouse report**: