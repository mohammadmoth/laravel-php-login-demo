<p align="center">
<a href="https://php-laravel-login-demo.othman.info" target="_blank">
Example: php-laravel-login-demo.othman.info
</a>
</p>


## About Project Demo
A demo project built with laravel [Laravel framework](https://github.com/laravel/framework/tree/6.x) version 6.X . 

- [x] User registration (email address, username, password).
- [x] User receives a email to confirm the email address.
- [x] User login  and logout .

- [x] Password reset .
- [x] Login using magic link (by email) .

## How to install
```bash


git clone https://github.com/mohammadmoth/laravel-php-login-demo.git demo
#or ssh auth
git clone git@github.com:mohammadmoth/laravel-php-login-demo.git


composer install
#copy .env file
cp .env.example .env
#Generate key for crypto (AES)

php .\artisan key:generate

#Add info in env file like database name , username , password , email  . Please see .env.fullexample file

#for create table in database 
php .\artisan migrate

```

