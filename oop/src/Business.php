<?php

namespace Acme;

use Acme\Users\Person;

class Business {
  public function __construct(Staff $staff = null) {
    $this->staff = $staff;
  }
  
  public function hire(Users\Person $person)
  {
    // add $person to the staff collection
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}