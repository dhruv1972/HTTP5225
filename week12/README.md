# Laravel CRUD Application

My Week 12 assignment for HTTP5225. This is a simple CRUD app with users, courses, and professors with relationships.

## What it does

### Users
- Add new users (with password hashing)
- Select courses when adding users (many-to-many)
- View all users in a table with enrolled courses
- Edit user info and course selections
- Delete users
- Show individual user details with course info

### Courses  
- Add new courses with name and description
- Assign professors to courses (one-to-one)
- View all courses in a table with professor and student count
- Edit course info and professor assignment
- Delete courses
- Show individual course details with professor and enrolled students

### Professors
- Database table with 10 fake professors
- Can be assigned to courses
- Shows which course they teach

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
- professor_id (foreign key)
- created_at
- updated_at

### Professors (new table)
- id
- name
- created_at
- updated_at

### Course_User (pivot table)
- id
- course_id
- user_id
- created_at
- updated_at

## Relationships

- **Users ↔ Courses**: Many-to-many (students can enroll in multiple courses)
- **Professors ↔ Courses**: One-to-one (each course has one professor)

## Features

- Bootstrap styling for all pages
- Error handling with try-catch
- Form validation
- Password hashing
- Responsive design
- Course selection when adding users
- Professor assignment when creating courses
- Relationship display in all views

## Navigation

- Home page shows Users list with enrolled courses
- Click "Courses" button to see courses with professors
- Click "Professors" button to see professors
- Each page has navigation buttons

## Created by: [Your Name]
## Course: HTTP5225
## Date: [Current Date]

