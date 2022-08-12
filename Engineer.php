<?php

require_once("./Officer.php");

class Engineer extends Officer
{
    private $branch;

    public function __construct(string $name, $age, string $gender, string $address, string $branch)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->branch = $branch;
    }

    public function getBranch() : string
    {
        return $this->branch;
    }

    public function setBranch(string $branch)
    {
        $this->branch = $branch;
    }

    public function objEngineer() : object
    {
        return (object) 
        [
            "name" => $this->name,
            "age" => $this->age,
            "gender" => $this->gender,
            "address" => $this->address,
            "branch" => $this->branch
        ];
    }
}

