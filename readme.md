# Laravel Blog

A simple blog for demonstration purpose. Based on Laravel 5.4

## Requirements

- Laravel 5.4
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


## Demo login info

Admin user: neerajnairnrj777@gmail.com | password: password
Normal user: dinesh@gmail.com | password: password


## Installation

```
git clone https://github.com/milon/laravel-blog.git blog
cd blog
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

## Author

- Neeraj P
- (neerajnairnrj777@gmail.com)

Feel free to email me, if you have any question.

Also uploaded db_dump.sql file for db with data.
