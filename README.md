## Requirements

- PHP version 7.3

## Project Setup
Make sure you have fulfilled all the above requirements.
- Clone project and cd into the project folder
- create new database
- copy .env.example to .env
- set database credentials in the .env file
- set mail configuration in .env file as follows
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.zoho.com
    MAIL_PORT=587
    MAIL_USERNAME=<your zoho email>
    MAIL_PASSWORD=<your zoho password>
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=<your zoho email. must be same as the MAIL_USERNAME> 
    MAIL_FROM_NAME=<your site name>
- run composer install
- run php artisan migrate
- run php artisan roles:update
- run php artisan admin:register
- run php artisan serve
