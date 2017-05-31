test:
	php lib/phpunit-4.8.35.phar --bootstrap test/bootstrap.php test

server:
	php -S localhost:9000

# See http://stackoverflow.com/a/3931814
.PHONY: test
