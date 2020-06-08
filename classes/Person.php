<?php
class Person {
    //prop
    public $name;
    public $surname;
    public $age;
    public $salary;
    //construct
    public function __construct($_name, $_surname, $_age, $_salary) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        $this->salary = $_salary;
    }
    //method
    public function printName() {
        return $this->name . ' ' . $this->surname;
    }
}