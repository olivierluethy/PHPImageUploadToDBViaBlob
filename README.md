# PHP Image Upload to Database Using BLOB

A small PHP app that uploads images from your computer straight into a MySQL
database as BLOB data, then reads them back out of the database to display them
on a web page.

## Features

- Upload an image file through an HTML form.
- Store the raw image bytes and MIME type in a MySQL `BLOB` column.
- List all stored images, served directly from the database.
- View a single image by id.
- Delete stored images.

## Tech

- PHP (`mysqli`)
- MySQL (with a `BLOB` column for the image data)
- Plain HTML/CSS/JS front end

## Setup

1. Create the database table using `output_images.sql`.
2. Configure your database connection in `db.php`.
3. Serve the folder with a PHP-capable web server (e.g. `php -S localhost:8000`).
4. Open `index.php` in your browser to upload, and `listImages.php` to view all images.

## Files

- `index.php` — upload form and insert logic.
- `listImages.php` — lists all stored images.
- `imageView.php` — serves a single image by id.
- `delete.php` — removes an image.
- `db.php` — database connection.
- `output_images.sql` — table schema.

## Source

Based on the tutorial at https://phppot.com/php/mysql-blob-using-php/
