<p align="center">
<a href="https://php-laravel-login-demo.othman.info" target="_blank">
Example: php-laravel-login-demo.othman.info
</a>
</p>


## About Project Demo



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

php .\artisan key:generate


#for create table in database 
php .\artisan migrate

```
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
