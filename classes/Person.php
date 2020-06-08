<?php
class Person {
    //prop
    public $name;
    public $surname;
    public $age;
    public $salary;
    public $number;
    //construct
    public function __construct($_name, $_surname, $_age, $_salary, $_number) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        $this->salary = $_salary;
        $this->number = $_number;
    }
    //method
    public function printName() {
        return $this->name . ' ' . $this->surname;
    }
}

