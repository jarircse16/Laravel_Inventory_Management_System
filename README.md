
# Laravel Inventory Management System

## Description

This Laravel-based Inventory Management System (IMS) is designed to help businesses manage their inventory efficiently. It provides features for adding, editing, viewing and deleting products.

## Features

- A basic authentication system for users.
- CRUD operations will be accessible only to logged-in users.
- Implemented CRUD operations for the products.
- Responsive and user-friendly interface.

## Requirements

- PHP >= 7.4
- Composer
- Laravel >= 10
- MySQL database

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/inventory-management-system.git
    ```

2. Navigate to the project directory:

    ```bash
    cd inventory-management-system
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Configure the database connection in the `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=your-database-host
    DB_PORT=your-database-port
    DB_DATABASE=your-database-name
    DB_USERNAME=your-database-username
    DB_PASSWORD=your-database-password
    ```

6. Generate application key:

    ```bash
    php artisan key:generate
    ```

7. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Open your browser and visit [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Usage

- Access the application and register/login with your credentials.
- Default Email: jarir1114@gmail.com, Default Password: 123456
- Navigate to the "Products" section to manage your inventory.

## Contributing

Feel free to contribute to the project by submitting bug reports or feature requests. Pull requests are also welcome.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
