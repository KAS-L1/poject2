# My Apps

Welcome to my collection of applications! This repository contains various projects I’ve worked on, with each folder or section representing a unique application. Below is a brief overview of the apps and their setup instructions.

---

## Laravel - New Project Setup

### Description
This app is a Laravel-based web application that serves as the foundation for modern, feature-rich web development.

### Setup Instructions

1. **Create a New Laravel Project**
   ```bash
   laravel new project_name
   ```
   Follow the interactive prompts to:
   - Select a starter kit (e.g., `none`, `breeze`, or `jetstream`).
   - Choose a testing framework (`Pest` or `PHPUnit`).
   - Specify the database to use (`MySQL`, `MariaDB`, `SQLite`, etc.).

2. **Navigate to the Project Directory**
   ```bash
   cd project_name
   ```

3. **Environment Setup**
   - The `.env` file is automatically created. Update database credentials and other configurations as needed.

4. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run dev
   ```

5. **Install the Auth Package**
   ```bash
   composer require devdojo/auth
   ```

6. **Publish Assets, Configs, CI Workflow, and Migrations**
   ```bash
   php artisan vendor:publish --tag=auth:assets
   php artisan vendor:publish --tag=auth:config
   php artisan vendor:publish --tag=auth:ci
   php artisan vendor:publish --tag=auth:migrations
   ```

7. **Run Migrations**
   ```bash
   php artisan migrate
   ```

8. **Extend the User Model**
   Update the `App\Models\User` model to extend the DevDojo Auth user model. Navigate to `App\Models\User.php` and make the following changes:
   ```php
   <?php

   namespace App\Models;

   use Devdojo\Auth\Models\User as AuthUser;
   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Foundation\Auth\User as Authenticatable;
   use Illuminate\Notifications\Notifiable;

   class User extends AuthUser
   {
       // Your customizations...
   }
   ```

9. **Serve the Application**
   ```bash
   php artisan serve
   ```

   You can now access your Laravel application locally.

10. **Optimize Laravel for Local and Production Use**
   To ensure Laravel runs smoothly in both environments, follow these optimization steps:

   **For Local Development:**
   - Enable debug mode in `.env`:
     ```
     APP_DEBUG=true
     ```
   - Use the built-in development server:
     ```bash
     php artisan serve
     ```
   - Clear caches during development:
     ```bash
     php artisan cache:clear
     php artisan config:clear
     php artisan route:clear
     php artisan view:clear
     ```

   **For Production:**
   - Disable debug mode in `.env`:
     ```
     APP_DEBUG=false
     ```
   - Optimize the application:
     ```bash
     php artisan config:cache
     php artisan route:cache
     php artisan view:cache
     ```
   - Set proper permissions for storage and cache directories:
     ```bash
     chmod -R 775 storage bootstrap/cache
     ```
   - Use a web server like Apache or Nginx for hosting.
   - Utilize a queue worker for background jobs:
     ```bash
     php artisan queue:work
     ```

Feel free to explore, modify, and contribute to any of these apps! If you have questions or suggestions, please open an issue or reach out.
