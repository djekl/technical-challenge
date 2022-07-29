# Mumsnet Technical Challenge
We are designing a system that allows `Collectors` to keep track of `Books` that they own. The system will allow this data to be manipulated through an API.

The system will be running on a standard PHP installation, using MySQL as a data store. For the purposes of this challenge, we don't need to implement any API authentication.

## Collectors
We have provided a migration, model, factory and seeder for `Collectors`.

`Collectors` can have tens of thousands of `Books` in their collection.

## Books
`Books` consist of a UUID (that is generated when the book is created), a title, and are owned by a single `Collector`.

There are different types of books:

- Fiction
- Non-Fiction
- Technical
- Self-Help

This data also needs to be stored for each `Book`.

Each `Book` also has an ISBN number that must be looked up via an external service using its UUID.

There can be millions of `Book` records in the database.

## ISBN Client
We have provided an ISBN client that takes a UUID, and returns a (fake) ISBN number. This class simulates a call to an external service that takes a few seconds to complete.

The class is located in `App\Client\IsbnClient` and expects a Username and Password to be provided to it when it is instantiated.

**_This file should not be changed as part of this challenge._**

## Routing
We have provided the routing in the `routes/api.php` routes file. These routes point to stub controllers that we have also provided.

# What Do I Need to Do?
The aim of this challenge is to implement three different endpoints:

1. A `POST` endpoint to create a new `Book` for a given `Collector`.
1. A `GET` endpoint to view the details about a specific `Book`.
1. A `GET` endpoint to view a most recently added `Book` summary for a given `Collector`.

## Creating a New Book
This endpoint should allow a consumer of the API to create a new `Book` for a given `Collector`.

The endpoint is a `POST` request to `/books`.

The structure of the payload is up to you, but must be valid JSON.

## Retrieving Details About a Specific Book
This endpoint should allow a consumer of the API to get details about a specific `Book`, using its UUID to locate the record.

The endpoint is a `GET` request to `/books/{uuid}`.

The structure of the returned data is up to you, but should be valid JSON and should include all of the data that is held in the system about the book, including its ISBN number.

## Retrieving a Book Summary
This endpoint should allow a consumer of the API to get a most recently added `Book` summary for a given `Collector`. This summary should include the most recently added `Book` for each of the different types of `Book` (Fiction, Non-Fiction, Technical and Self-Help).

The endpoint is a `GET` request to `/collectors/{id}/recently-added`.

The structure of the returned data is up to you, but should be valid JSON.

# Submissions
To submit your challenge, fork this repo to a new private repository in your GitHub account.

Once you have completed it and would like us to review it, please add the following users to the repo:

- mdavis1982
- AntonCooper

Good luck!
