<?php
include_once __DIR__ . '/Person.php';

class Manager extends Person {
    public $number;
    public $role;
    public function __construct($_name, $_surname, $_age, $_salary, $_number, $_role) {
        parent::__construct($_name, $_surname, $_age, $_salary);
        $this->number = $_number;
        $this->role = $_role;
    }
}