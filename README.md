# Ticketing System

This is a simple ticketing system web application where users can create and delete tickets. The project is a work in progress, and features such as updating tickets and implementing user roles are planned for future updates.

---

## Features

- **Create Tickets:** Users can create new tickets with relevant details.
- **Delete Tickets:** Users can delete tickets they have created.

### Upcoming Features
- **Update Tickets:** Users will be able to edit/update existing tickets.
- **User Roles:** Different user roles (e.g., admin, manager, user) with specific permissions.

---

## Requirements

Before installing the project, ensure you have the following installed on your system:

- [PHP](https://www.php.net/downloads) (version 7.3 or higher)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and npm (for frontend assets)
- [MySQL](https://dev.mysql.com/downloads/) (or any other supported database)
- A local server environment (e.g., [XAMPP](https://www.apachefriends.org/) or [Laravel Valet](https://laravel.com/docs/valet))

---

## Installation

Follow these steps to install and run the project on your local machine:

### 1. Clone the Repository

```cmd or bash
git clone https://github.com/your-username/ticketing-system.git
cd ticketing-system
```

### 2. Install Dependencies

Run the following command to install PHP dependencies:

```cmd or bash
composer install
```

Install Node.js dependencies:

```cmd or bash
npm install
```

### 3. Set Up Environment Variables

Copy the `.env.example` file to `.env`:

```cmd or bash
cp .env.example .env
```

Update the `.env` file with your database credentials and other settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ticketing_system
DB_USERNAME=root
DB_PASSWORD=your-password or leave blank if you heven't set any
```

### 4. Generate Application Key

Run the following command to generate the application key:

```cmd or bash
php artisan key:generate
```

### 5. Run Database Migrations

Run the migrations to set up the database tables:

```cmd or bash
php artisan migrate
```

### 6. Serve the Application

Start the development server:

```cmd or bash
php artisan serve
```

By default, the application will be available at http://127.0.0.1:8000.
