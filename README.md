silverorange Developer Test
===========================

Provided basic PDO framework with some data fixtures for authors and Markdown
formatted posts:

 1. create an importer that imports a list of post files (some will be
    provided) into the database
 2. create a tool that given a post id from the database, renders the post
    content (title, body, author) as an HTML document
 3. create a tool that renders a list of posts with authors as an HTML document

The HTML rendering script does not have to be a web server—you can just dump
HTML to STDOUT. If you want to use PHP's built-in server (`php -S`) or an
existing web framework, that is acceptable.

Please use [PSR-2 and PSR-4](http://www.php-fig.org/psr/) for your code. The
[PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) tool can be used to check
your code. Please use the [Composer](https://getcomposer.org/) tool for
dependency management. You can use any 3rd-party libraries as necessary or
as desired in order to achieve the tasks.

Your commit history is important to us! Try to make meaningful commit messages
that show your progress.

Database
--------
The provided SQL files will run in PostgreSQL. PostgreSQL can be installed
using `brew` on macOS or using your distro's package manager in Linux. To
create a new database and import the fixture data, run:

```
createdb silverorange_dev_test -O $(whoami) -U postgres
psql silverorange_dev_test < sql/accounts.sql
psql silverorange_dev_test < sql/posts.sql
```

Starting fresh is as simple as:
```
dropdb silverorange_dev_test -U postgres
```
