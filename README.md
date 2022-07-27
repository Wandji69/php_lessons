## User Management System


### Description: 
A user management system is every important in most enterprise software which cut across different areas of life ranging from Health, School and even managing companies.

### Installations
- Locally
1. Clone repo
2. Run ```composer install```
3. Setup database ```cp .env.example .env```, then setup your database credentials in the `.env` 
file then run `php artisan migrate`
4. `npm install` to build js and css files (NOTE: The auth scaffolding of this project in build using laravel/ui)
5. `php artisan serve`

Linke to Heroku app: https://ancient-plains-90874.herokuapp.com/
link to GitHub repo https://github.com/wandji69/php_lessons/userManagement.git

NOTE: The app is running but have the following know issues;
1. Database not connected so login give `sever Error`
2. cant see the user list and form due to database issues.


