<?php

namespace managerPloyee;

class EmployeeManager
{
    private static  array $employee;

    public static function EmployeeManager()
    {
        return self::$employee = [];
    }
    public static function add($employee): void
    {
        self::$employee[] = $employee;
    }
    public function getEmployee(): array
    {
        return self::$employee;
    }
}

$list_employees = EmployeeManager::EmployeeManager();
