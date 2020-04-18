# Stackcasts API Playground

A backend API playground powered by [Laravel](https://laravel.com) and created by [Stackcasts](https://www.stackcasts.com)

View the demo at: https://api-playground.stackcasts.com

## Goals

To create a simple Laravel based example API where students learning programming online can experiment safely without having to pay or sign up for any unnecessary services.

## Api Endpoints

#### A paginated list of all users

```sh
# GET '/users'
$ curl GET https://api-playground.stackcasts.com/api/users
```

#### Find a user by their id

```sh
# GET '/users/{id}'
$ curl GET https://api-playground.stackcasts.com/api/users/{id}
```

#### Create a user

```sh
# POST '/users'
$ curl POST https://api-playground.stackcasts.com/api/users
```

#### Update a user

```sh
# PUT '/users'
$ curl PUT https://api-playground.stackcasts.com/api/users/{id}
```

#### Delete a user

```sh
# DELETE '/users/{id}'
$ curl DELETE https://api-playground.stackcasts.com/api/users/{id}
```

## Installation

**Note:** You do not need to install anything to have access to the API Playground.

These installation steps are only for people who would like to run the API Playground locally or on their own servers.

```sh
git clone https://github.com/stackcasts/api-playground api-playground
cd api-playground
```

> Create your database and update `.env` with your database connection details

```sh
php artisan migrate --seed
```

# License

MIT
