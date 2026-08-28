# Student Registration System

## Introduction

The Student Registration System is a Laravel-based web application
designed to allow students to register their personal and academic
information digitally.

The system validates user input, stores student information in a
MySQL database, and allows students to upload a profile picture.

## Objectives

- Create a professional registration form.
- Implement server-side validation.
- Store student information in MySQL.
- Upload profile pictures.
- Display validation errors.
- Display success flash messages.
- Understand Laravel request processing.
- Practice Git and GitHub version control.

## Technologies Used

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Git
- GitHub

## Features

- Student registration
- Server-side validation
- Unique Student ID
- Unique email
- Profile picture upload
- Flash success message
- Student profile page
- Student list
- MySQL database

## Laravel Request Lifecycle

Browser
↓
Route
↓
Controller
↓
Validation
↓
Model
↓
Database
↓
Response
↓
Browser

## Validation Rules

### Student ID
Required and unique.

### First Name
Required.

### Last Name
Required.

### Email
Required, valid email format, and unique.

### Mobile Number
Required and numeric.

### Profile Picture
Required image file with JPG, JPEG, or PNG format
and maximum size of 2MB.

## Database Design

The students table contains the student's personal,
academic, contact, and profile picture information.

## Installation

Clone the repository:

git clone YOUR_REPOSITORY_URL

Enter the project:

cd week04-student-registration

Install dependencies:

composer install

Copy environment file:

copy .env.example .env

Generate application key:

php artisan key:generate

Configure MySQL in .env.

Run migrations:

php artisan migrate

Create storage link:

php artisan storage:link

Run Laravel:

php artisan serve

## Screenshots

Screenshots are available inside the screenshots folder.

## Problems Encountered

### 1. Validation Errors

Problem:
Some invalid data was being rejected by Laravel.

Solution:
The validation rules were checked and corrected inside
StudentController.

### 2. Image Upload

Problem:
The uploaded image was not displaying.

Solution:
The Laravel storage link was created using:

php artisan storage:link

### 3. Database Migration

Problem:
The students table was not initially available.

Solution:
The database configuration in .env was checked and
php artisan migrate was executed again.

## Reflection

The project helped demonstrate the importance of validating
user input before storing information in a database. Server-side
validation provides an additional layer of protection because
validation is performed by the application instead of relying
only on the browser. The activity also demonstrated how file
uploads must be handled carefully in web applications. Laravel
Storage provides a structured way to store uploaded files while
the database only stores the file path. The project also showed
how registration systems can be used in real-world enterprise
applications to collect and manage information.

## References

Laravel Documentation

PHP Documentation

MySQL Documentation

Tailwind CSS Documentation

MDN Web Docs