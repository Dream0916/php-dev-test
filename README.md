# silverorange Developer Assessment

This exercise is designed to assess how you approach tasks required in your
position as an intermediate PHP developer at silverorange. We are interested to
see how you work as well, as what your final results are; include useful Git
commit messages and comments where you think your code may be unclear.

Please do not include your name or any other self-identifying information in
code or commit messages as silverorange will anonymize your work before
reviewing.

## Tasks

### 1 — Update an Existing Page

Using the provided basic web framework, make the following changes to the
`/checkout` page. For this part of the exercise we are interested in HTML and
CSS only—**no functionality is required**. No mockups are provided, so work to
make changes fit with the existing visual page design:

1. Change the multi-line _Street Address_ field into _Line 1_ and _Line 2_
   fields. The _Line 2_ field should be optional.
2. Add a check-mark and the following text below the _Order Summary_ section:
   > With our “Rise & Shine” beta program, you get early access to new
   > features, but they may not always work perfectly. You can change your beta
   > preference at any time after you join.
3. Add a picture of the product into the order summary. A high resolution image
   is provided in `highres-assets/product.jpg`.

The template for the checkout page is in `src/Templates/Checkout.php`. The
styles for the page are in `assets/index.css`.

### 2 — Database Access

Using the same provided basic web framework, and data fixtures for authors and
posts that are provided:

1.  Write an importer in PHP that imports a list of post files (examples are
    provided in the `data` folder) into the database.
2.  Update `src/Controller/PostDetails.php` to load a published post from
    the database with the specified id. Update the
    `src/Template/PostDetails.php` template to render the post content
    (title, body, author) as HTML. _The post body is formatted as Markdown and
    the HTML should include the formatted Markdown_.
3.  Update the `src/Controller/PostIndex.php` to load all published posts from
    the database in reverse chronological order. Update the
    `src/Template/PostIndex.php` template to render ths list as HTML. Include
    the post titles and authors in the output. Make clicking a post go
    to the post details.

The provided basic web framework is a guideline—feel free to adapt it however
you like to achieve the tasks above.

**See below for instructions on how to run the test database**.

## Environment

You may use any
[currently supported version of PHP](https://www.php.net/supported-versions.php).
If you are using macOS,
[installing PHP via brew](https://formulae.brew.sh/formula/php) is recommended.
The default PHP provided by macOS can only connect to MySQL.

Docker Compose is an easy option to get a local database running, but it is not
required.

## Coding Standard

Please use [PSR-12 and PSR-4](http://www.php-fig.org/psr/) for your code. The
[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) tool can be used to check
your code.

The project is set up to lint your code using:

```sh
composer run lint
```

## Dependencies

Pease use the [Composer](https://getcomposer.org/) tool for dependency
management. You can use any 3rd-party libraries as necessary or as desired in
order to achieve the tasks.

## Commits

Your commit history is important to us! Try to make meaningful commit messages
that show your progress. **Remember to not include your name or any other
self-identifying information in your commit messages.**

## Getting Started with the PHP Application

Provided is an extremely basic PHP web framework. The provided web framework
runs using PHP’s built-in web server using using the command:

```sh
composer run start
```

You can then access the application on port 8000. The following links can be
used to test:

- http://localhost:8000 - this will verify the application is running.
- http://localhost:8000/checkout - the page to edit for part 1 of the exercise.
- http://localhost:8000/posts - the posts index page.
- http://localhost:8000/posts/6ec246b1-ad09-4e03-8573-21e2e779856c - this
  should load a post once the posts are imported and the application is updated.
- http://localhost:8000/asdfghjk - this should show a not-found page.

Here is an overview of the files and folders that make up the framework:

- `Controller/` - these classes are simple route controllers. They can load
  data, set request-specific data in a context object, and pass it to templates.
- `Template/` - these classes contain a `render()` method that takes a context
  object and returns a string of HTML. The context object can contain
  arbitrary data to pass to the template.
- `Model/` - simple classes that could represent data from the database. You
  may use these if you find them helpful.
- `App.php` - this is the main class that runs the framework. The `run()`
  method loads an appropriate controller for the current request. The
  controller renders the template and the application sends the content as
  HTTP response (aka it echos the content).

## Getting Started with the Database

You may use MySQL, MariaDB, PostgreSQL, or SQLite for this exercise.

The provided SQL files will run in PostgreSQL. You can use the provided
Docker Compose configuration to run a local instance of PostgreSQL using:

```sh
docker compose up --detach
```

The Docker container is accessible externally using the following properties:

- host: `localhost`
- port: `5532`
- database: `silverorange`
- user: `silverorange`
- password: `silverorange`

When the database is running, you can import the provided tables and fixtures
by running:

```sh
docker compose exec -- db psql silverorange silverorange < sql/authors.sql
docker compose exec -- db psql silverorange silverorange < sql/posts.sql
```

If you want to reset your database, run:

```sh
docker compose down --volumes
docker compose up --detach
```

For other databases, the provided SQL sources in the `sql/` folder may need
modification. You may use Docker Compose or any other method of running a local
database.

The DSN string in `src/Config.php` may need to be modified if you use a
different database or do not use PostgreSQL with Docker Compose.
