# Amerilink Internation Coporation Coding Test

[![Amerilink](https://img.aichotels-content.com/amerilink-85131105.jpg)](http://www.aichotels.com)

This test is about how to create a TODO list. This project consists of two parts:
based on laravel 5.6 and angularjs 1.6.9.

  - Frontend should be built by angularjs 1.6.9, html, css, and bootstrap.
  - Backend should be bult by laravel 5.6

# Instructions

  * Laravel official website will be really helpful [Laravel 5.6](https://laravel.com/docs/5.6)
  * You should fork this repository and develop it on your machine. After you complete the project, share your own repository with your interviewer.
  #### Requirements
  * PHP7.x should be installed on your machine
  * Mysql, apache, composer, git should be installed on your machine
  * The easy way will be that install WAMP/XAMP on windows operation system or MAMP on MAC.
  * This project do require some basic knowledge about git.
#### Frontend part:
 * All front end files are located in backend/public/ directory
 #### Backend part:
* After downloading the project, firstly you should create the .env file at the backend directory, and copy everything from .env.example file then change 
    ~~~~
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ~~~~
  to your database connection.
 * Navigate to backend folder and run `composer install` to install all dependcies which laravel framework requires.
 * Then run `php artisan migrate` to define all the tables on mysql database.
 * Finally run `php artisan db:seed --class=TodoSeeder` to load some dummy data.
 * You can run `php artisan route:list` to see all predefined routes.
 

#### Starting the server
* cd backend
* Run `php artisan serve`
* Open browser and navigate to 127.0.0.1:8000
 
#### Good luck
