# Moesif Slim Example

Slim is a micro framework that many developers use to write powerful web applications APIs.

Moesif is an API analytics and monitoring platform. [moesif-slim](https://github.com/Moesif/moesif-slim)
is a middleware that makes integration with Moesif easy for Slim based applications.

This is an example of Slim application with Moesif integrated.

## Key files

- `config/middleware.php` added Moesif middleware.

- `config/moesif.php` this is the settings for Moesif Middleware with example options.

If you are going to run this example, please remember to go to `config/moesif.php`
and update with application id with your actual application id.

Your Moesif Application Id can be found in the [_Moesif Portal_](https://www.moesif.com/).
After signing up for a Moesif account, your Moesif Application Id will be displayed during the onboarding steps. 

You can always find your Moesif Application Id at any time by logging 
into the [_Moesif Portal_](https://www.moesif.com/), click on the top right menu,
and then clicking _Installation_.

## How to run

Step 1: Install all dependencies by `composer install` or `composer update`. See [composer](https://getcomposer.org) for more information. 

Step 2: To start the server `php -S localhost:9000 -t public public/index.php`

See `config/moesif.php` for some urls that you can hit the server with (e.g. http://localhost:9000/), and the data should be captured in the corresponding Moesif account of the application id.