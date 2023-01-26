<?php

namespace App\Models;

class User
{
    protected $id;
    protected $email;
    protected $password;
    protected $fullName;
    protected $phone;
    protected $role;


    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getRole()
    {
        return $this->role;
    }


    // SET METHODS
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function setRole(bool $role)
    {
        $this->role = $role;
    }


    public function checkLogin()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        else {
            header('Location: /signin');
            return false;
        }
    }
    // CRUD OPERATIONS
    public function create(array $data) // sign up
    {
    }

    public function read_all()
    {
    }

    public function read($email, $password) // sign in
    {
        $this->email = $email;
        $this->password = $password;

        $connect = new Connect();
        $con = $connect->db_connect();
        $query = pg_query_params($con, 'SELECT * FROM users WHERE "UserEmail" = $1 AND "UserPassword" = $2', array($email, $password));
        if (isset($query) && pg_num_rows($query) > 0) {
            $user = pg_fetch_assoc($query);
            $_SESSION['user'] = [
                "id" => $user['UserID'],
                "email" => $user['UserEmail'],
                "fullName" => $user['UserFullName'],
                "tel" =>  $user['UserPhone'],
                "role" => $user['UserRole']
            ];
            header('Location: /profile');
        }
        else {
            $_SESSION['message2'] = 'Неверный логин или пароль';
            header('Location: /signin');
        }

        $connect = $connect->db_close();
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}
