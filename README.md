# Contact Us Generator

This Package use create form contact us with [ blade , migrations , config Email to receive all contact request ] ,when you need receive any date on your admin email from website or system
## Installation

Using [composer](https://getcomposer.org/) to install routable.

```bash
composer require emad/contact-us-package
```
## Configuration
in your ```config\app.php```
add in your ```providers```
```php
'providers' => [
    /*
     * Package Service Providers...
     */
    Emad\ContactUsPackage\ContactServiceProvider::class,
];
```
## Preparing your Email to receive contact request
in your ```contact\src\contact.php```
add  ```email```
```php
return [
    'send_email_to' => 'email@example.com'
];
```

## Usage
write on your terminal 
```php
php artisan vendor:publish
choice emad package number
```

## Check
```.env```
```php
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=write_user_name
MAIL_PASSWORD=write_user_password
MAIL_ENCRYPTION=tls
MAIL_FROM_NAME="${APP_NAME}"
```

### Write contact on URL
```php

"http://127.0.0.1:8000/contact"
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


## License
[MIT](https://choosealicense.com/licenses/mit/)
