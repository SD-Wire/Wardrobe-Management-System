# Wardrobe Management System

## Project Overview
This is a **Wardrobe Management System** built using **Laravel 11** for the backend and **Vue 3** for the frontend. The system allows users to **add, edit, delete, categorize, search, and filter clothing items** in a user-friendly interface.

## Features
- **User Authentication** (Sign-up/Login)
- **Admin Panel** for managing clothing items
- **CRUD Operations** (Create, Read, Update, Delete)
- **Item Categorization** (Tops, Bottoms, Shoes, etc.)
- **Search and Filter Functionality**
- **Responsive UI** using Vue 3

## Prerequisites
Make sure you have the following installed on your machine:
- PHP 8+
- Composer
- Node.js & npm
- Laravel 11
- SQLite (No external database is required)

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-repository.git
cd wardrobe-management-system
```

### 2. Install Backend Dependencies (Laravel)
```bash
composer install
```

### 3. Install Frontend Dependencies (Vue 3)
```bash
npm install
```

### 4. Set Up the SQLite Database
Create an SQLite database file:
```bash
touch database/database.sqlite
```

Update the `.env` file with the following database configuration:
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

### 5. Run Migrations and Seed Default User
```bash
php artisan migrate --seed
```
This will create the necessary tables and add a **default admin user**:
- **Email:** `ndotosons@gmail.com`
- **Password:** `12345678`

### 6. Serve the Backend (Laravel API)
```bash
php artisan serve
```
This will start the Laravel backend at `http://127.0.0.1:8000`

### 7. Serve the Frontend (Vue 3)
```bash
npm run dev
```
This will start the Vue frontend, usually at `http://localhost:5173` (depending on your setup).

## Usage
1. **Visit the application:**  `http://127.0.0.1:8000`
2. **Sign up** to create a new account OR **Log in with the default admin credentials**:
   - **Email:** `ndotosons@gmail.com`
   - **Password:** `12345678`
3. Once logged in, access the **Admin Panel** to **add, edit, delete, and categorize clothing items.**

## Additional Commands
- **Clear Cache & Config:**
  ```bash
  php artisan cache:clear
  php artisan config:clear
  ```
-


