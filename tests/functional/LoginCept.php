<?php 
$I = new FunctionalTester($scenario);

$I->am('A registered user: justin');
$I->wantTo('Login successfully');


$I->amOnPage('/login');
$I->submitForm('.loginUser', [
    
    //'name' => 'Mario Basic',
    //'email' => 'test@test.com',
    //'comment' => 'This is a codeception test email.'

	'username' => 'justin',
	'password' => 'password'



    //
]);
$I->seeCurrentUrlEquals('/login');
$I->see('User Logged In Successfully!!');
