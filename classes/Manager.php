<?php
include_once __DIR__ . '/Person.php';

class Manager extends Person {
    public $role;
    public function __construct($_name, $_surname, $_age, $_salary, $_number, $_role) {
        parent::__construct($_name, $_surname, $_age, $_salary, $_number);
        $this->role = $_role;
    }
}

$manager = new Manager('Paolo', 'Duzioni', 38, 60000, rand(100, 999), 'Project Manager');

