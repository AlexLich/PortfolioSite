<?php
namespace App\Service;

class AuthService
{
    const FILE_NAME='../../../.htpasswd';

    protected $users = array (
        array(
            'username' => 'test' ,
            'password' => 'pwd'
    ));

    public function login($username, $password)
    {
        $result = false;
        if ($username and $password) {
            $user = $this->findUser($username);
            if ($user) {
                // session_start();
                if (strpos($user['password'], $password) !== false) {
                    // $_SESSION['admin'] = true;
                    $result = true;
                }
            }
        }

        return $result;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }

    public function findUser($username)
    {
        $result = false;

        // if(!is_file(FILE_NAME)) {
        //     $users = file(FILE_NAME);
        //
        //     foreach($users as $user) {
        //         if(strpos($user, $username.':') !== false) {
        //             $result = $user;
        //         }
        //     }
        // }

        foreach ($this->users as $user) {
            if(strpos($user['username'], $username) !== false) {
                $result = $user;
            }
        }

        return $result;
    }
}
