<?php

interface Provider {
  public function authorize();
}

// function login(Provider $provider){
//   $provider->authorize();
// }

// Abstract class
abstract class AbstractProvider {
  abstract protected function getAuthUrl();
}

class FacebookProvider implements Provider {
  protected function getAuthUrl(){
    return '';
  }
}