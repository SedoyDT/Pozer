<?php
namespace Package\Filters;
use Package\Model\User;

class Filter {

    public function __construct(){

    }

    public function GetDataFromUserClass(User $class){
        return $class->Display();
    }
}