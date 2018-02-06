<?php 

namespace Acme;

class AuthController implements RespondsToUserRegistration
{
  protected $registration;

  public function __construct(RegisterUser $registration = null) {
    $this->registration = $registration;
  }

  public function register()
  {
    $this->registration->execute([], $this);
  }

  public function userRegisteredSuccessfully()
  {
    var_dump("Created successfully. Redirect somewhere.");
  }

  public function userRegisteredFailed()
  {
    var_dump("Unsuccessful. Redirect back.");
  }
}
