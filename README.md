# YouTube Clone (Yii2)

A simple YouTube clone built with the Yii2 PHP framework.

## Features
- User authentication (register, login, logout)
- Video upload, update, and deletion
- Video streaming
- Thumbnail management
- Video privacy settings (public, unlisted, private)
- Basic user dashboard

## Requirements
- PHP 8.0+
- Composer
- MySQL or MariaDB
- Yii2 Framework
- FFmpeg (for video processing)

## Installation

### 1. Clone the repository
```sh
    git clone https://github.com/ndy-s/yii2-youtube-clone.git
    cd yii2-youtube-clone
```

### 2. Install dependencies
```sh
    composer install
```

### 3. Initialize the application
Run the Yii2 initialization command:
```sh
    php init
```
Follow the prompts to select the environment.

### 4. Configure the database
Edit `common/config/main-local.php` to set up your database:
```php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=your_database_host;dbname=your_database_name',
            'username' => 'your_database_user',
            'password' => 'your_database_password',
            'charset' => 'utf8',
        ],
    ],
];
```

### 5. Run database migrations
```sh
    php yii migrate
```

### 6. Set up writable directories
```sh
    chmod -R 777 storage/
    chmod -R 777 web/storage/
```

### 7. Serve the application

#### Frontend (Port 8001)
```sh
php -S localhost:8001 -t frontend/web
```
The frontend will be available at `http://localhost:8001`

#### Backend (Port 8000)
```sh
php -S localhost:8000 -t backend/web
```
The backend will be available at `http://localhost:8000`

## Configuration

Edit the `common/config/params.php` file to set your frontend URL:
```php
return [
    'frontendUrl' => 'http://localhost:8001',
];
```

## File Storage
By default, uploaded videos and thumbnails are stored in `web/storage/videos/` and `web/storage/thumbs/`.

## Email Configuration
Emails are stored in a file by default. You can check them in `runtime/mail/`.
To configure SMTP, update `common/config/main.php`:
```php
'mailer' => [
    'class' => \yii\symfonymailer\Mailer::class,
    'viewPath' => '@common/mail',
    'useFileTransport' => false,
    'transport' => [
        'dsn' => 'smtp://user:pass@smtp.example.com:25',
    ],
],
```

## Screenshots
<p align="center">
  <img src="https://github.com/user-attachments/assets/0e29a0e6-d5d1-4b74-8584-fb253b76f81f" width="45%" />
  <img src="https://github.com/user-attachments/assets/548780d5-2b26-4f4d-a0ff-78457892cfe7" width="45%" />
</p>

## License
BSD 3-Clause

