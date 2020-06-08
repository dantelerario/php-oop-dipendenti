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
        // if (! is_int($_salary)) {
        //     throw new Exception('Valore non valido');
        // }
        return $this->name . ' ' . $this->surname . ' €' . $this->salary;
    }
}

