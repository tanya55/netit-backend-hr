<?php
class Auth {
    static function isUserAlreadyExists($columnName) {
        $username   = $columnName['user_name'];
        $Email  = $columnName['email'];

        $validateIfRegistartionUserAlreadyExistQuery = "SELECT * FROM tb_users WHERE name = '$username' OR email = '$Email'";

        $requestResult       = Database::get($validateIfRegistartionUserAlreadyExistQuery);
        return ($requestResult != null);
    }
    static function createNewEmployInDatabase($databaseColumn) {
        return Database::insert('tb_users', array(
            'name'      => $databaseColumn['user_name'   ],
            'first_name'     => $databaseColumn['first_name'  ],
            'last_name'     => $databaseColumn['last_name'  ],
            'email'     => $databaseColumn['email'  ],
            'password'  => $databaseColumn['password'   ],
            'number'  => $databaseColumn['number'   ],
            'age'  => $databaseColumn['age'   ],
            'gender'  => $databaseColumn['gender'   ],
            'city'  => $databaseColumn['city'   ],
            'category'  => $databaseColumn['category'   ]
        ));
    }
    
    static function assigneRoleToUser($userid, $roleid) {

        return Database::insert('tb_user_roles', array(
            'id_user' => $userid,
            'id_role' => $roleid
        ));
    }
        
    static function createNewEmploy($databaseColumn) {
        
        $isUserCreated = Auth::createNewEmployInDatabase($databaseColumn);

        if($isUserCreated) {
            return Auth::assigneRoleToUser(Database::getLastInsertedId(), 1);
        }
    }
    
    static function createNewEmployerInDataBase($databaseColumn)
    {
        return Database::insert('tb_users', array(
            'name'      => $databaseColumn['user_name'   ],
            'first_name'     => $databaseColumn['first_name'  ],
            'last_name'     => $databaseColumn['last_name'  ],
            'email'     => $databaseColumn['email'  ],
            'password'  => $databaseColumn['password'   ],
            'number'  => $databaseColumn['number'   ],
            'age'  => $databaseColumn['age'   ],
            'gender'  => $databaseColumn['gender'   ],
            'city'  => $databaseColumn['city'   ],
            'category'  => $databaseColumn['category'   ]
        ));
    }

    static function assignRoleToEmployer($userid, $roleid)
    {
        return Database::insert('tb_user__roles', array(
            'user_id' => $userid,
            'role_id' => $roleid
        ));
    }

    static function createNewEmployer($databaseColumn)
    {
        $isUserCreated = Auth::createNewEmployerInDataBase($databaseColumn);
        if ($isUserCreated) {
            return Auth::assignRoleToUser(Database::getLastInsertedId(), 2);
        }
    }
    
    static function setAuthenticatetUser($authenticatedCollectionData) {
        
        
        $_SESSION['user_data_collection']   = $authenticatedCollectionData['user_data_collection'];
        $_SESSION['user_role_collection']   = $authenticatedCollectionData['user_role_collection'];
        $_SESSION['is_authenticated']       = true;
    }
    
    static function isAuthenticated() {
        return (isset($_SESSION['is_authenticated'])) ? $_SESSION['is_authenticated'] : false;
    }
    
    static function isNotAuthenticated() {    
        return !Auth::isAuthenticated();
    }
        
    static function isEmploy() {
        
        return Auth::isAuthenticated() && Auth::hasRole('EMPLOY');
    }
    
    static function isEmployer() {
        return Auth::isAuthenticated() && Auth::hasRole('EMPLOYER');
    }
    
    static function isAdmin() {
        
        return Auth::isAuthenticated() && Auth::hasRole('ADMIN');
    }
    
    static function isHR()
    {
        return Auth::isAuthenticated() && Auth::hasRole('HR');
    }
    
    static function signout() {
        session_destroy();
    }
    
     private static function hasRole($roleTitle)
    {
        foreach ($_SESSION['user_role_collection'] as $key => $value) {
            if ($value['role_title'] == $roleTitle) 
            {
                return true;
            }
        }
        return false;
    }    
}