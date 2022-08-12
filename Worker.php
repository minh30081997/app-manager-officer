<?php

require_once("./Officer.php");

class Worker extends Officer
{
    private $level;

    public function __construct(string $name, $age, string $gender, string $address, $level)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function work(): object
    {
        return (object)
        [
            "name" => $this->name,
            "age" => $this->age,
            "gender" => $this->gender,
            "address" => $this->address,
            "level" => $this->level
        ];
    }
}
