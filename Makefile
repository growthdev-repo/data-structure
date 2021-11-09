.PHONY: test
test:
	@echo "Data Structure Tests"
	php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ --testdox --colors 

.PHONY: test-class
test-class:
	@echo "Data Structure Tests for test class name"
	php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ --testdox --colors --filter $(filter-out $@,$(MAKECMDGOALS))

