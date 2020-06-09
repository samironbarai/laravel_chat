# Laravel realtime chatting application

Very simple php based chatting application

# Installation
1. Clone this repo
```bash
https://github.com/samironbarai/laravel_chat.git
```

2. Install composer packages
```bash
cd laravel_chat
$ composer install
```

3. Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
```

4. Migrate and insert records
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 30)->create();
$ factory(App\Message::class, 500)->create();
```

5. Create and setup pusher account
```bash
login to https://pusher.com/ and create new app
put pusher credentials to .env file

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

```
