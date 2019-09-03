# Laravel realtime chatting application with php laravel 5.8 using pusher

Very simple php based chatting application.

# Installation
* run composer update
* make a copy of .env.example and rename to .env
* php artisan key:generate
* put database credentials in .env file
* run php artisan migrate
* to insert users and messages data run php artisan tinker
* factory(App\User::class, 30)->create();
* factory(App\Message::class, 500)->create();
* login to https://pusher.com/ and create new app
* put pusher credentials to .env file
