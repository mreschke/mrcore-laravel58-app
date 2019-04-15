## mReschke Mrcore5 with Laravel 5.8


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

Built by mreschke 2019-04-14

* Built from stock laravel 5.9
* Copy  `composer.json` from previous version
* Copy `.env` and `.env.example` from previous version
* Install `mrcore5/foundation`.  See https://github.com/mrcore5/framework
* Deleted all folders inside `resources` as it's Laravels new 5.3 stuff I don't need in root mrcore...add to foundation installer
* Comment out default web routes
* ??Deleted `gulpfile.js` and `package.json`
* Copy over `.rocketeer` from previous version
* Copy over `.gitignore` and this `README.md` file from previous versions
* Modified many `config/*.php` config files and added more `env()` wrappers
 * `auth.php` moded to https://github.com/mrcore5/framework
 * `database.php` merged from previous version
 * `dynatron.php` added from previous version
 * `modules.php` added from previous version

