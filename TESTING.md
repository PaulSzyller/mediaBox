
  ------------------------ For codeception

  To make a new test file
    php codecept.phar generate:cept {functional} {name}
    - This will create a php file in tests to put in tests for a
      specific page. If a LoginTest.php existed, we could put as many
      functional tests (pass and/or fail) in the file

  To run functional tests:
    php codecept.phar run functional
    -This command will run all of your functional tests
  

