## Dynatron Mrcore5 with Laravel 5.3

mRcore is used at Dynatron to manage all Laravel packages and modules.


## What Is mRcore

mRcore is a module/package system for Laravel allowing you to build all your applications as reusable modules.
Modules resemble the Laravel folder structure and can be plugged into a single Laravel instance.
mRcore solves module loading dependency order and in-place live asset handling.  Modules can be
full web UIs, REST APIs and/or full Console command line apps.  A well built module is not only your
UI and API, but a shared PHP library, a native API or repository which can be reused as dependencies in other modules.

We firmly believe that all code should be built as modules and not in Laravel's directory structure itself.
Laravel simply becomes the "package server".  A single Laravel instance can host any number of modules.

See https://github.com/mrcore5/framework for details and installation instructions.


## How this Repo was Built

Built by mreschke 2015-11-09

* Built from stock laravel 5.3
* Copy  `composer.json` from previous version
* Copy `.env` and `.env.example` from previous version
* Installed `mrcore5/foundation`.  See https://github.com/mrcore5/framework
* Deleted all folders inside `resources` as it's Laravels new 5.3 stuff I don't need in root mrcore...add to foundation installer
* Delete new `routes` folder...add to foundation installer
* Deleted `gulpfile.js` and `package.json`
* Copy over `.rocketeer` from previous version
* Copy over `.gitignore` and this `README.md` file from previous versions
* Copy `database/seeds/XendevSeeder.php` and add to `DatabaseSeeder.php`
* Modified many `config/*.php` config files and added more `env()` wrappers
 * `auth.php` moded to https://github.com/mrcore5/framework
 * `database.php` merged from previous version
 * `dynatron.php` added from previous version
 * `mail.php` set from with env()
```
    'from' => [
    'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
    'name'    => env('MAIL_FROM_NAME', 'Example'),
    ],
```
 * `modules.php` added from previous version
 * `queue.php` add `'queue' => env('QUEUE', 'default'),` on `redis` queue
* Removed `VerifyCsrfToken` from `app/Http/Kernel.php` because we make a lot of ajax calls, and they all fail unless this is disabled or we do a bunch of work to pass in `X-CSRF-TOKEN` header.

