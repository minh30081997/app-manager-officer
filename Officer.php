<?php

class Officer
{
    protected string $name;
    protected $age;
    protected string $gender;
    protected string $address;

    public function __construct(string $name, $age, string $gender, string $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
    }

    public function inFo()
    {
        echo "Name: " . $this->name . " " . $this->age . " " . $this->sex . " " . $this->address;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge() 
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getGender() : string
    {
        return $this->gender;
    }

    public function setGender(string $gender) 
    {
        $this->gender = $gender;
    }

    public function getAddress() : string 
    {
        return $this->address;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }
}