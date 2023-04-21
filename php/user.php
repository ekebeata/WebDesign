<?php

class  User {
    private $sex;
    private $name;
    private $email;
    private $age;
    private $username;
    private $password;

    /**
     * User constructor.
     * @param $sex
     * @param $name
     * @param $email
     * @param $age
     * @param $username
     * @param $password
     */
    public function __construct($sex, $name, $email, $age, $username, $password)
    {
        $this->sex = $sex;
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->username = $username;
        $this->password = $password;
    }


    /**
     * @return mixed
     */
    public function getSex()
    {
        if($this->sex == "f"){
            $this->sex = "nő";
        }
        else {
            $this->sex = "férfi";
        }
        return $this->sex;

    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function adatok(){
        $user = [
            "sex" => $this->sex,
            "name" => $this->name,
            "email" => $this->email,
            "age" => $this->age,
            "username" => $this->username,
            "password" => $this->password,
        ];

        $file = fopen("../txt/users.txt", "a");
        fwrite($file, serialize($user). "\n");
        fclose($file);
    }
}



