<?php

class User
{
    private $id;
    private $email;
    public $name;

    function __get($val)
    {
        throw new Exception("Свойство $val не существует ");
        return $this;
    }
    function __set($name, $value)
    {
        throw new Exception("Свойство $name не существует ");
        return $this;
    }
}

$user = new User();
try {
    echo $user->email->name;
}catch (Exception $e){
    echo $e->getMessage();
}