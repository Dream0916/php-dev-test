silverorange Developer Assessment
=================================

This is a small set of tasks to assess your skill at developing PHP
applications that talk to a database.

Provided basic PDO framework with some data fixtures for authors posts:

 1. Create an importer that imports a list of post files (examples are provided
    in the `data` folder) into the database.
 2. Create a tool that given a post id from the database, renders the post
    content (title, body, author) as an HTML document.
 3. Create a tool that renders all available posts in reverse chronological
    order as an HTML document. Include the post title and author in the rendered
    document.

The post body is formatted as Markdown and the HTML should include the
formatted Markdown.

The provided framework is a guideline and does not need to be used. Adapt it or
replace it as you see fit.

The HTML rendering script does not have to be a web server—you can just dump
HTML to STDOUT. If you want to use PHP's built-in server (`php -S`) or an
existing web framework, that is acceptable.

Please use [PSR-2 and PSR-4](http://www.php-fig.org/psr/) for your code. The
[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) tool can be used to check
your code. Please use the [Composer](https://getcomposer.org/) tool for
dependency management. You can use any 3rd-party libraries as necessary or
as desired in order to achieve the tasks.

The project is set up to lint your code using:
```
composer run lint
```

Your commit history is important to us! Try to make meaningful commit messages
that show your progress.

Database
--------
You may use MySQL, MariaDB, PostgreSQL, or SQLite for this exercise.

The provided SQL files will run in PostgreSQL. PostgreSQL can be installed
using `brew` on macOS or using your distro's package manager in Linux. To
create a new database and import the fixture data, run:

```
createdb silverorange_dev_test
psql silverorange_dev_test < sql/accounts.sql
psql silverorange_dev_test < sql/posts.sql
```

Starting fresh is as simple as:
```
dropdb silverorange_dev_test
```

For other databases, the provided SQL sources may need modification.
