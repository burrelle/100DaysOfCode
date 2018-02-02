<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$john = new Person('John Doe');
$staff = new Staff([$john]);
$business = new Business($staff);
$business->hire(new Person('Jane Doe'));

var_dump($business->getStaffMembers());