<?php

require_once("./ManagerOfficer.php");
require_once("./Officer.php");
require_once("./Worker.php");
require_once("./Staff.php");
require_once("./Engineer.php");
class Main
{
    public function main()
    {
        $managerOfficer = new ManagerOfficer();

        while (true) {
            echo "Application Manager Officer";
            echo "\n";
            echo "Enter 1: To insert officer";
            echo "\n";
            echo "Enter 2: To search officer by name";
            echo "\n";
            echo "enter 3: To show information officers";
            echo "\n";
            echo "enter 4: Delete officer by name";
            echo "\n";
            echo "enter 5: To exit";
            echo "\n";

            $number = trim(fgets(fopen("php://stdin", 'r')));

            switch ($number) {
                case "1":
                    echo "Enter a: To insert Engineer";
                    echo "\n";
                    echo "Enter b: To insert Staff";
                    echo "\n";
                    echo "Enter c: To insert Worker";
                    echo "\n";

                    $value = trim(fgets(fopen("php://stdin", "r")));

                    switch ($value) {
                        case "a":
                            echo "name: ";
                            $name = fgets(fopen("php://stdin", "r"));
                            echo "age: ";
                            $age = fgets(fopen("php://stdin", "r"));
                            echo "gender: ";
                            $gender = fgets(fopen("php://stdin", "r"));
                            echo "address: ";
                            $address = fgets(fopen("php://stdin", "r"));
                            echo "branch: ";
                            $branch = fgets(fopen("php://stdin", "r"));

                            $engineer = new Engineer($name, $age, $gender, $address, $branch);
                            $managerOfficer->addOfficer($engineer);
                            $managerOfficer->listOfficer();
                            break;

                        case "b":
                            echo "name: ";
                            $name = fgets(fopen("php://stdin", "r"));
                            echo "age: ";
                            $age = fgets(fopen("php://stdin", "r"));
                            echo "gender: ";
                            $gender = fgets(fopen("php://stdin", "r"));
                            echo "address: ";
                            $address = fgets(fopen("php://stdin", "r"));
                            echo "task: ";
                            $task = fgets(fopen("php://stdin", "r"));

                            $staff = new Staff($name, $age, $gender, $address, $task);
                            $managerOfficer->addOfficer($staff);
                            $managerOfficer->listOfficer();
                            break;

                        case "c":
                            echo "name: ";
                            $name = fgets(fopen("php://stdin", "r"));
                            echo "age: ";
                            $age = fgets(fopen("php://stdin", "r"));
                            echo "gender: ";
                            $gender = fgets(fopen("php://stdin", "r"));
                            echo "address: ";
                            $address = fgets(fopen("php://stdin", "r"));
                            echo "level: ";
                            $level = fgets(fopen("php://stdin", "r"));

                            $worker = new Engineer($name, $age, $gender, $address, $level);
                            $managerOfficer->addOfficer($worker);
                            $managerOfficer->listOfficer();
                            break;
                        default:
                            echo "Invalid";
                            echo "\n";
                            break;
                    }
                    break;

                case "2":
                    echo "search name: ";

                    $nameOfficer = trim(fgets(fopen("php://stdin", "r")));
                    $managerOfficer->searchOfficer($nameOfficer);
                    break;

                case "3":
                    $managerOfficer->listOfficer();
                    break;
                
                case "4":
                    echo "Delete name: ";

                    $nameOfficer = trim(fgets(fopen("php://stdin", "r")));
                    $managerOfficer->deleteOfficer($nameOfficer);
                    // $managerOfficer->listOfficer();
                    break;

                case "5":
                    exit;

                default:
                    echo "Invalid";
                    echo "\n";
                    break;
            }
        }
    }
}

$main = new Main();
