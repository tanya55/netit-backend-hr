<?php

if(isset($_POST['user_request_tokken']) AND $_POST['user_request_tokken'] == 1) {
    
    $userName           = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $FirstName         = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $LastName          = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $userEmail          = isset($_POST['email']) ? $_POST['email'] : '';
    $userPass           = isset($_POST['password']) ? $_POST['password'] : '';
    $userPassRepeat     = isset($_POST['password_repeat']) ? $_POST['password_repeat'] : '';
    $userNumber       = isset($_POST['number']) ? $_POST['number'] : '';
    $userAge          = isset($_POST['age']) ? $_POST['age'] : '';
    $userGender          = isset($_POST['gender']) ? $_POST['gender'] : '';
    $userCity          = isset($_POST['city']) ? $_POST['city'] : '';
    $userCategory          = isset($_POST['category']) ? $_POST['category'] : '';
    
    
    if(strlen($userName)    < 3)   {
        return setFormError('signup', 'user_name', 'Min lengt 3 characters is required');
    }
    
    if(strlen($FirstName)   < 3)        {
        return setFormError('signup', 'first_name', 'Min lengt 3 characters is required');
    }
    
    if(strlen($LastName)   < 3) {
        return setFormError('signup', 'last_name', 'Min lengt 3 characters is required');
    }
    
    if(strlen($userEmail)   < 5) {
        return setFormError('signup', 'email', 'Min lengt 5 characters is required');
    }
    
    if($userPass != $userPassRepeat)  {
        return setFormError('signup', 'password', 'User password and password repeat must be the same strring');
    }
    
    if(Auth::isUserAlreadyExists(array('user_name' => $userName, 'email' => $userEmail))) {
        return setFormError('signup', 'user_name', 'This user already exists');
    }
    
    $isUserrCreated = Auth::createNewUser(array(
        'user_name'     => $userName,
        'first_name'    => $Firstname,
        'last_name'    => $Lastname,
        'email'    => $userEmail,
        'password'     => $userPass,
    ));
    
    if($isUserrCreated) {
        echo 'User created successfuly';
    }
}