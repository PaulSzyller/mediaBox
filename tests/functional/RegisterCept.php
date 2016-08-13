<?php 
$I = new FunctionalTester($scenario);

$I->am('A new user');
$I->wantTo('Register successfully');


$I->amOnPage('/signup');
$I->submitForm('.signUp', [
    
    //'name' => 'Mario Basic',
    //'email' => 'test@test.com',
    //'comment' => 'This is a codeception test email.'


    //

    'username' => $username,
                'first_name' => 'Test',
                'last_name' => 'User',
                'email' => 'testuser@gmail.com',
                'password' => 'somepassword',
                'location' => '123 Dirt Road',
                'dob' => '1 November 1990',
                'gender' => 'male',
                'question' => 'What is your favorite food?',
                'answer' => 'pizza',
                'remember_token' => 'sometoken14542'
]);
$I->seeCurrentUrlEquals('//signup');
$I->see('User Registered Successfully!!');




/*
signUp

Route::post('/signup', 'RegistrationController@signUp');


'username' => $username,
                'first_name' => $fname,
                'last_name' => $lname,
                'email' => $email,
                'password' => Hash::make($password),
                'location' => $location,
                'dob' => $dob,
                'gender' => $gender,
                'question' => $question,
                'answer' => $answer,
                'remember_token' => $remember_token


*/