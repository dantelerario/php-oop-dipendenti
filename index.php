<?php
include_once __DIR__ . '/classes/Manager.php';
include_once __DIR__ . '/classes/Employee.php';

$manager = new Manager('Paolo', 'Duzioni', 38, 60000, rand(100, 999), 'Project Manager');

$employee = new Employee('Ugo', 'Fantozzi', 58, 20000, rand(100,999), 'Accountants', 'Lunedi-Venerdi 40 ore');

echo "Scheda Manager: {$manager->printName()} <br>";

echo "Scheda Dipendente: {$employee->printName()} <br>";

var_dump($manager);

var_dump($employee);