<?php

class ManagerOfficer
{
    public $officers = [];

    public function __construct()
    {
        
    }

    public function addOfficer($officer)
    {
        $this->officers[] = $officer;
        return $this->officers;
    }
    
    public function getOfficer($nameOfficer)
    {
        foreach ($this->officers as $key => $data) {
            if (trim($data->getName()) == $nameOfficer) {
                var_dump($this->officers[$key]);
                return $key;
            }
        }
    }

    public function searchOfficer($nameOfficer)
    {
        return $this->getOfficer($nameOfficer);
        echo "No value!";
        echo "\n";
        return (object) [];
    }

    public function deleteOfficer($nameOfficer)
    {
        unset($this->officers[$this->getOfficer($nameOfficer)]);
        return $this->getOfficer($nameOfficer);
    }

    public function listOfficer()
    {
        foreach ($this->officers as $data) {
            print_r($data);
        }
    }

}