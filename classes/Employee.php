<?php
include_once __DIR__ . '/Person.php';

class Employee extends Person {
    public $department;
    public $shifts;
    public function __construct($_name, $_surname, $_age, $_salary, $_number, $_department, $_shifts) {
        parent::__construct($_name, $_surname, $_age, $_salary, $_number);
        $this->department = $_department;
        $this->shifts = $_shifts;
    }
}
