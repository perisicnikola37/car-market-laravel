# Online car market project | Laravel  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />
>This project was an exercise modeled on the largest Montenegrin car market: 
 [AutoDiler](https://www.autodiler.me/) <img height="15" src="https://i.ibb.co/1dCvrW2/logo-min.png" />

![schooldash-dahboard-page](https://i.postimg.cc/Y96bJHfM/naslovna.png)
![schooldash-dahboard-page](https://i.postimg.cc/L4jmDcPh/1.png)
![schooldash-dahboard-page](https://i.postimg.cc/1zC5FJCQ/limit2.png)
![schooldash-dahboard-page](https://i.postimg.cc/brYHW2w9/registracija.png)
![schooldash-dahboard-page](https://i.postimg.cc/NGbxTbdJ/logovanje.png)

## Requirements 
* PHP 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your command line below (Or you can download the zip file from GitHub)
```shell
git clone https://github.com/perisicnikola37/car-market-laravel.git
 ```
* Head to the projects directory
```shell
cd car-market-laravel
 ```
* Install/Update Composer dependencies
```shell
composer install 
```

* Copy .env.example file into .env file and configure based on your environment
```shell
cp .env.example .env
```
* Generate an encryption key
```shell
php artisan key:generate
```
* Migrate the database
```shell
php artisan migrate 
```     
* For development or testing purposes, you can use the Laravel built-in server by running 
```shell
php artisan serve
```

After running the above commands, you should be able to access the application at http::/localhost or your designated domain name depending on the configuration.

* There are two roles: 
- `administrator` and `subscriber`

## Highlights

### User Limitation
Each user can have a maximum of three active advertisements.

### Enhanced Functionality
Implemented car factories using <i>pelmered/fake-car</i> for realistic data generation.
Utilized Laravel Sluggable to optimize SEO performance.

### Security Measures
Integrated CSRF protection to safeguard against cross-site request forgery.
Implemented Middleware protection for unauthorized users.
Incorporated session messages for enhanced user feedback.
Provided default values for fuel type, state type, drive type, and more for seamless user experience.

### User Experience
Employed SweetAlert2 for enhanced user interface interaction.
Utilized Chart.js to visualize data effectively.
Implemented pagination on the homepage for improved navigation.

### Administrator Control
Empowered administrators with a CMS (Content Management System) enabling them to view, edit, and delete all advertisements.

### Validation
Implemented robust form validation mechanisms to ensure data integrity and user input accuracy.

<div>
  <div>&copy; All rights reserved  <a href="https://github.com/perisicnikola37" style="font-size: 16px;">@perisicnikola37</a></div>
</div>





