# About Muzario

In addition to the standard features of a music player (creating and editing playlists, editing the playback order in playlists, editing songs), it also includes such features as:

- **Search**. Provides the ability to search for songs on the Internet and, as well as Everyday download them and add to their playlists.
- **Upload**. Allows you to upload songs in mp3 format to your playlists.

# Requirements
- php 7.2.2
- the file .env must have a constant `PYTHON_PATH=''`, if you want to use the standard path leave an empty string (like a '')

# Installation

First run the composer, it will load everything you need and generate an autoloader.
```bash
composer install
```

Perform npm install
```bash
npm install
```

Setup using artisan

```bash
php artisan migrate
php artisan passport:install
php artisan storage:link
php artisan key:generate
```

Generate Vue components

```bash
npm run production
```

And do not forget to increase the limits in php.ini !
