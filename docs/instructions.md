# Stackcasts API Playground

A backend API playground powered by [Laravel](https://laravel.com) and created by [Stackcasts](https://www.stackcasts.com)

View the demo at: https://api-playground.stackcasts.com

## Goals

To create a simple Laravel based example API where students learning programming online can experiment safely without having to pay or sign up for any unnecessary services.

## Installation

```sh
git clone https://github.com/stackcasts/api-playground api-playground
cd api-playground
```

> Create your database and update `.env` with your database connection details

```sh
php artisan migrate --seed
```

## Api Endpoints

```sh
# GET '/users'
$ https://api-playground.stackcasts.com/api/users
```


# License

MIT
