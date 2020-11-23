# Order food 

> Design and implementation of food ordering system.

## Task Description:
  - As a user, we need an API that returns possible feeds based on available raw        materials.
  - As a user, we need an API to register a food order in the system.

## requirements:
  - After logging in to the system via the /menu, a response in JSON format that includes possible foods based on ingredients The original is available to be returned.
  - The user can order a food through /order. After registering the order, the stock of raw materials for that food should be reduced Slowly.
  - If the expiration date of expires-at raw material has expired, foods containing this raw material should not be returned.To be
  - If the ingredients are from the best-before time but have not expired, the foods included This raw material should be at the bottom of the answer list.
  - Each raw material has a specific inventory that is deducted from the inventory after registering the order.
  - Foods containing this raw material should not be returned if the raw material has been depleted.
  - Every 15 minutes, add 4 to the finished raw material inventory.

# Installation

Install the dependencies and start the server to test the Api.

```sh
$ Composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan passport:install
$ php artisan db:seed
$ php artisan serve
$ php artisan schedule:run
```


# swagger 

>http://localhost:8000/api/documentation
