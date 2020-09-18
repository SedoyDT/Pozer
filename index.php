<?php
require_once 'app/init.php';

use Package\Filters\Filter as Filter;
use Package\Model\User as User;

$filter = new Filter();
echo $filter->GetDataFromUserClass(new User());