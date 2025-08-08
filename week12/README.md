# Laravel CRUD Application

My Week 12 assignment for HTTP5225. This is a simple CRUD app with users, courses, and professors.

## What it does

### Users
- Add new users (with password hashing)
- View all users in a table
- Edit user info (optional password change)
- Delete users
- Show individual user details

### Courses  
- Add new courses with name and description
- View all courses in a table
- Edit course info
- Delete courses
- Show individual course details

### Professors
- Database table with 10 fake professors
- Just shows the seeded data for now

## Setup

1. Copy all files to your project folder
2. Run `composer install` 
3. Create `.env` file with your database settings
4. Run `php artisan key:generate`
5. Make sure your database "laravel" exists
6. Run `php artisan migrate` to create tables
7. Run `php artisan db:seed --class=ProfessorSeeder` to add fake professors
8. Run `php artisan serve`
9. Open http://localhost:8000

## Database Tables

### Users (existing table)
- id
- name  
- email
- password

### Courses (new table)
- id
- name
- description
- created_at
- updated_at

### Professors (new table)
- id
- name
- created_at
- updated_at

## Features

- Bootstrap styling for all pages
- Error handling with try-catch
- Form validation
- Password hashing
- Responsive design

## Navigation

- Home page shows Users list
- Click "Courses" button to see courses
- Click "Professors" button to see professors
- Each page has navigation buttons

## Created by: [Your Name]
## Course: HTTP5225
## Date: [Current Date] 