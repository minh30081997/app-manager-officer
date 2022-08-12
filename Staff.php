<?php

require_once("./Officer.php");

class Staff extends Officer
{
    private string $task;

    public function __construct(string $name, $age, string $gender, string $address, string $task)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->task = $task;
    }

    public function getTask() : string
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function objStaff() : object
    {
        return (object)
        [
            "name" => $this->name,
            "age" => $this->age,
            "gender" => $this->gender,
            "address" => $this->address,
            "task" => $this->task
        ];
    }
}