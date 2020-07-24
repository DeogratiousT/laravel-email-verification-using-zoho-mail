## Requirements

- PHP version 7.3

## Project Setup
Make sure you have fulfilled all the above requirements.
1. Clone project and cd into the project folder
2. create new database
3. copy .env.example to .env
4. set database credentials in the .env file
5. set mail configuration in .env file as follows
    - MAIL_DRIVER=smtp
    - MAIL_HOST=smtp.zoho.com
    - MAIL_PORT=587
    - MAIL_USERNAME=your zoho email
    - MAIL_PASSWORD=your zoho password
    - MAIL_ENCRYPTION=tls
    - MAIL_FROM_ADDRESS=your zoho email. must be same as the MAIL_USERNAME 
    - MAIL_FROM_NAME=your site name
6. run composer install
7. run php artisan migrate
8. run php artisan roles:update
9. run php artisan admin:register
10. run php artisan serve
