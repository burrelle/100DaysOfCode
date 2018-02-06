<?php

class BankAccount
{
  protected $accounts;

  public function __construct($accounts) 
  {
    $this->accounts = $accounts;
  }

  public function FilterBy($accountType)
  {
    return array_filter($this->accounts, function($account) use ($accountType) 
    {
      return $this->isOfType($accountType);
    });
  }
}

class Account {
  protected $type;

  public function __construct($type) 
  {
    $this->type = $type;
  }

  public function isOfType($accountType)
  {
    return $this->type() == $accountType && $this->isActive();
  }

  private function type()
  {
    return $this->type;
  }

  private function isActive()
  {
    return true;
  }

}