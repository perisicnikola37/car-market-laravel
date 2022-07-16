# AutoDiler - Online Car Market Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />
>This project was an exercise modeled on the largest Montenegrin car market: 
 [AutoDiler](https://www.autodiler.me/) <img height="15" src="https://i.ibb.co/1dCvrW2/logo-min.png" />
 - I did both: frontend and backend


![schooldash-dahboard-page](https://i.postimg.cc/Y96bJHfM/naslovna.png)
![schooldash-dahboard-page](https://i.postimg.cc/xCXj3Mhb/oglas2.png)
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
git clone https://github.com/dzonidevv/auto-diler.git
 ```
* Head to the projects directory
```shell
cd auto-diler-master
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

## Features
* One user can have only 3 advertisements active
* Added Factories for cars using <i>pelmered/fake-car</i>
* Used Laravel Sluggable for SEO
* Added CSRF protection
* Added Middleware protection for unregistered users 
* Added session messages
* Added default values for fuel type, state type, drive type and many more
* Used SweetAlert2
* Used Chart.js
* Added pagination on homepage
* Administrator has CMS ( Management System ) with the ability to view, edit and delete everyone's advertisement

## 🚀 Tech used

* PHP v.8
* Laravel v.9
* MySQL
* HTML v.5 / CSS v.3 / Bootstrap v.5
* JavaScript 






