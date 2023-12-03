# Chirper - A Simple Laravel Application

Chirper is a social media platform built with Laravel, allowing users to post short messages called "chirps."

## Features

-   User registration and authentication
-   Create, read, update, and delete chirps
-   User profiles with chirp history
-   Email notifications for new chirps

## Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

-   PHP (>= 7.4)
-   Composer
-   Mysql or another database of your choice

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yeab-tilahun/chirper.git
    ```

2. Change into the project directory:

    ```bash
     cd chirper
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the .env.example file to .env and configure your environment variables, including database settings.

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
     php artisan key:generate
    ```

6. Run database migrations:

    ```bash
     php artisan migrate
    ```

7. Start the development server:

    ```bash
     php artisan serve
    ```

8. Visit http://127.0.0.1:8000 in your browser to view the application.
